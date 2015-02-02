/*
** Author: Thomas Carlsen @tcarlsen
*/

window.addEventListener('load', function () {

var tcQuizMaxPoints = 0;
var tcQuizTodaysDate = new Date();
var tcQuizSelectedAnswers = [];
var tcQuizMonthsInDanish = [
    'januar',
    'febuar',
    'marts',
    'april',
    'maj',
    'juni',
    'juli',
    'august',
    'september',
    'oktober',
    'november',
    'december'
]
var tcQuizViewQuestions = function() {
    for(var q = 0; q < tcQuizQAs.length; q ++) {
        var tcQuizQuestionContainer = $('<div/>')
                .attr({
                    class: 'tc-quiz-question',
                    "data-question-id": tcQuizQAs[q].id
                });
        var tcQuizQuestionTitle = $('<h5/>')
                .html(tcQuizQAs[q].question)
                .appendTo(tcQuizQuestionContainer);

        if(tcQuizQAs[q].url != "") {
            var tcQuizHelpContainer = $('<a/>')
                .attr({
                    class: 'tc-quiz-help',
                    target: '_blank',
                    href: tcQuizQAs[q].url
                })
                .html('(Få hjælp til svaret her)')
                .appendTo(tcQuizQuestionContainer);
        }

        var tcQuizBestAnswer = 0;

        for(var a = 0; a < tcQuizQAs[q].answers.length; a ++) {
            var tcQuizAnswerContainer = $('<div/>')
                    .attr({
                        class: 'tc-quiz-answer',
                        "data-question-key": q,
                        "data-question-id": tcQuizQAs[q].id,
                        "data-answer-key": a,
                        "data-answer-id": tcQuizQAs[q].answers[a].id
                    })
                    .html(tcQuizQAs[q].answers[a].answer)
                    .click(function() {
                        $(this).parent().children().removeClass('selected');
                        $(this).addClass('selected');

                        tcQuizSelectedAnswers[$(this).attr('data-question-key')] = {
                            question_key: $(this).attr('data-question-key'),
                            answer_key: $(this).attr('data-answer-key')
                        };

                        if($('.tc-quiz-answer.selected').length == tcQuizQAs.length) {
                            $('#tc-quiz-action')
                                .text('Se dit resultat')
                                .click(function() {
                                    $(this).hide();

                                    $('html,body').animate({
                                        scrollTop: $('.tc-quiz').offset().top
                                    }, 'slow');

                                    tcQuizViewResult();
                                })
                                .removeAttr('disabled');
                        }
                        else if($('.tc-quiz-question:visible .tc-quiz-answer.selected').length == tcQuizQuestionsOnView) {
                            $('#tc-quiz-action')
                                .unbind()
                                .click(function() {
                                    $('.tc-quiz-question:visible').hide();
                                    $(this).attr('disabled', 'disabled');

                                    for(var i = tcQuizAtQuestion; i < (tcQuizAtQuestion + tcQuizQuestionsOnView); i ++) {
                                        $('.tc-quiz-question').eq(i).show();
                                    }

                                    tcQuizAtQuestion += tcQuizQuestionsOnView;
                                })
                                .removeAttr('disabled');
                        }
                    })
                    .appendTo(tcQuizQuestionContainer);

            if(tcQuizQAs[q].answers[a].points > tcQuizBestAnswer) {
                tcQuizBestAnswer = parseInt(tcQuizQAs[q].answers[a].points);
            }
        }

        tcQuizMaxPoints += tcQuizBestAnswer;

        if(tcQuizQAs[q].details != "") {
            var tcQuizDetailsContainer = $('<a/>')
                .attr({
                    class: 'tc-quiz-details'
                })
                .html(tcQuizQAs[q].details)
                .appendTo(tcQuizQuestionContainer);
        }

        tcQuizQuestionContainer.appendTo($('#quiz_' + tcQuizId + ' .tc-quiz-questions'));
    }

    if(tcQuizQuestionsOnView > 0) {
        var tcQuizAtQuestion = tcQuizQuestionsOnView;

        for(var i = tcQuizQuestionsOnView; i < tcQuizQAs.length; i ++) {
            $('.tc-quiz-question').eq(i).hide();
        }

        $('#tc-quiz-action').text('Næste');
    }
    else {
        $('#tc-quiz-action').text('Se dit resultat');
    }
}
var tcQuizViewResult = function() {
    $('.tc-quiz-answer').unbind();
    $('.tc-quiz-question').hide();
    $('#tc-quiz-refresh')
        .click(function() {
            window.location.href = window.location.href;
        })
        .show();

    if(tcQuizGoThrough == 1) {
        $('#tc-quiz-action')
            .text('Tjek dine svar')
            .unbind()
            .click(function() {
                $(this).hide();

                tcQuizViewGoThrough();
            })
            .removeAttr('disabled')
            .show();
    }
    else if($('.tc-quiz-submission').length > 0) {
        $('#tc-quiz-action')
            .text('Deltag i konkurrencen')
            .unbind()
            .click(function() {
                $('.tc-quiz-question .tc-quiz-refresh').hide();

                tcQuizViewSubmission();
            })
            .removeAttr('disabled')
            .show();
    }

    if(tcQuizType == 2) {
        var points = 0;

        $.each(tcQuizSelectedAnswers, function() {
            points += parseInt(tcQuizQAs[$(this)[0].question_key].answers[$(this)[0].answer_key].points)
        });

        $('.tc-quiz-message').html('<h2 class="tc-quiz-score">Du fik ' + points + ' point ud af ' + tcQuizMaxPoints + ' mulige!</h2>' + tcQuizMessages.ending);
    }
}
var tcQuizViewGoThrough = function() {
    $('.tc-quiz-help').hide();
    $('.tc-quiz-details').css({
        display: 'block'
    });

    if(tcQuizType == 2) {
        $('.tc-quiz-answer').each(function() {
            var points = tcQuizQAs[$(this).attr('data-question-key')].answers[$(this).attr('data-answer-key')].points;

            if($(this).hasClass('selected')) {
                if(points > 0) {
                    $(this).addClass('tc-quiz-answer-correct');
                }
                else {
                    $(this).addClass('tc-quiz-answer-incorrect');
                }
            }

            $(this).append('<div class="tc-quiz-points">' + points + ' point</div>')
        });
    }

    $('.tc-quiz-question').show();

    if($('.tc-quiz-submission').length > 0) {
        $('#tc-quiz-action')
            .text('Deltag i konkurrencen')
            .unbind()
            .click(function() {
                $('.tc-quiz-question').hide();

                $('html,body').animate({
                    scrollTop: $('.tc-quiz').offset().top
                }, 'slow');

                tcQuizViewResult();

                tcQuizViewSubmission();
            })
            .show();
    }
}

var tcQuizViewSubmission = function() {
    $('.tc-quiz-question, .tc-quiz-message').hide();
    $('.tc-quiz-submission').show();
    $('#tc-quiz-action')
        .text('Alle felter med * skal udfyldes')
        .unbind()
        .click(function() {
            $(this)
                .text('Gemmer din tilmelding...')
                .attr('disabled', 'disabled')
                .unbind();
            $('.tc-quiz-submission input')
                .attr('disabled', 'disabled')
                .unbind();

            tcQuizSendSubmission();
        })
        .attr('disabled', 'disabled')
        .show();
    $('.tc-quiz-submission input.required').keyup(function() {
        if($('.tc-quiz-submission input.required[value=""]').length == 0) {
            $('#tc-quiz-action')
                .removeAttr('disabled')
                .text('Tilmeld');
        }
    });

    var placeholderSupport = ("placeholder" in document.createElement("input"));

    if(!placeholderSupport){
        $('[placeholder]')
	        .focus(function () {
	            var input = $(this);
	            if (input.val() === input.attr('placeholder')) {
	                input.val('').removeClass('placeholder');
	            }
	        })
	        .blur(function () {
	            var input = $(this);
	            if (input.val() === '' || input.val() === input.attr('placeholder')) {
	                input.addClass('placeholder').val(input.attr('placeholder'));
	            }
	        })
	        .blur()
	        .parents('form').submit(function () {
	            $(this).find('[placeholder]').each(function () {
	                var input = $(this);
	                if (input.val() === input.attr('placeholder')) {
	                    input.val('');
	                }
	            });
	        });
    }
}

var tcQuizSendSubmission = function() {
    var tcQuizFormData = {};
    tcQuizFormData['leads'] = '';
    var tcQuizUserAnswers = new Array();

    $('.tc-quiz-submission input').each(function() {
        if($(this).attr('type') == 'checkbox') {
            var tcQuizLeadId = $(this).attr('name').split('-');

            if($(this).attr('checked')) {
                tcQuizFormData['leads'] += tcQuizLeadId[1] + ',';
            }
        }
        else {
            tcQuizFormData[$(this).attr('name')] = $(this).val();
        }
    });

    $(".tc-quiz-answer.selected").each(function() {
        tcQuizUserAnswers.push($(this).attr('data-answer-key'));
    });

    tcQuizFormData['answers'] = tcQuizUserAnswers.toString();
    tcQuizFormData['quiz_id'] = tcQuizId;

    $.ajax({
        type: "POST",
        url: 'http://www.b.dk/helpers/quiz/save_submission.php',
        data: tcQuizFormData,
        dataType: 'json',
        success: function(data) {
            if(data.success == 1) {
                $('.tc-quiz-submission, #tc-quiz-action').hide();
                $('.tc-quiz-message').html(tcQuizMessages.subscription_message).show();
            }
            else {
                $('.tc-quiz-message').html('<h6>Du er allerede tilmeldt denne konkurrence.</h6>').show();
                $('#tc-quiz-action').hide();
            }
        }
    });
}

if(tcQuizTodaysDate < tcQuizStart) {
    var tcQuizDateDeff = (tcQuizStart - tcQuizTodaysDate);
    var tcQuizTimeLeft = tcQuizDateDeff/1000/60/60/24;
    var tcQuizDateText = 'den ' + tcQuizStart.getDate() + '. ' + tcQuizMonthsInDanish[tcQuizStart.getMonth()] + ' kl. ' + tcQuizStart.getHours() + ':' + (tcQuizStart.getMinutes()<10?'0':'') + tcQuizStart.getMinutes();

    if(tcQuizTimeLeft < 1) {
        tcQuizDateText = 'kl. ' + tcQuizStart.getHours() + ':' + (tcQuizStart.getMinutes()<10?'0':'') + tcQuizStart.getMinutes();
    }


    $('.tc-quiz-message').html('<h3>Quizzen åbner ' + tcQuizDateText + '</h3>');
    $('#tc-quiz-action').hide();
}
else if(typeof tcQuizEnd !== 'undefined') {
    if(tcQuizTodaysDate > tcQuizEnd) {
        $('.tc-quiz-message').html('<h3>Quizzen er slut!</h3>');
        $('#tc-quiz-action').hide();
    }
    else {
      console.log(1);
        tcQuizViewQuestions();
    }
}
else {
  console.log(2);
    tcQuizViewQuestions();
}

}, false);
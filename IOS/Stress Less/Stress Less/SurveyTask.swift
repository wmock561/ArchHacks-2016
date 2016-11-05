//
//  SurveyTask.swift
//  Stress Less
//
//  Created by Reiker Seiffe on 11/5/16.
//  Copyright © 2016 Reiker R Seiffe. All rights reserved.
//

import Foundation
import ResearchKit

public var SurveyTask: ORKOrderedTask {
    
    var steps = [ORKStep]()
    
    /*STEP ONE*/
    
    let formOneChoices:[String] = ["Home","Work","School","Car"]
    
    let formOne:ORKFormStep = ORKFormStep(identifier: "questionStepOne", title: "Where were you when the attack started?", text: "Select all that apply")
    
    var textChoices = [
        ORKTextChoice(text: formOneChoices[0], value: 0),
        ORKTextChoice(text: formOneChoices[1], value: 1),
        ORKTextChoice(text: formOneChoices[2], value: 2),
        ORKTextChoice(text: formOneChoices[3], value: 3),
    ]
    
    var inputChoice = ORKTextAnswerFormat(maximumLength: 20)
    
    let firstAnswerFormat: ORKTextChoiceAnswerFormat = ORKAnswerFormat.choiceAnswerFormatWithStyle(.MultipleChoice, textChoices: textChoices)
    
    var textFormItem = ORKFormItem(identifier: "questionStepOneSelect", text: "Descriptor", answerFormat: firstAnswerFormat, optional: true)
    var textFormItemTwo = ORKFormItem(identifier: "inputChoice", text: "Other", answerFormat: inputChoice, optional: true)
    
    var formItemArray:[ORKFormItem] = [textFormItem, textFormItemTwo]
    
    formOne.formItems = formItemArray
    

    //let firstQuestionStep = ORKQuestionStep(identifier: "TextChoiceQuestionStep", title: firstQuestionStepTitle, answer: firstAnswerFormat)
    steps += [formOne]
    
    /*STEP SECOND*/
    let formSecond:ORKFormStep = ORKFormStep(identifier: "questionStepTwo", title: "What might have triggered the attack?", text: "Select all that apply")
    
    let formTwoChoice:[String] = ["People","Places","Thoughts","Surroundings","Events","Diet"]
    
    textChoices = [
        ORKTextChoice(text: formTwoChoice[0], value: 0),
        ORKTextChoice(text: formTwoChoice[1], value: 1),
        ORKTextChoice(text: formTwoChoice[2], value: 2),
        ORKTextChoice(text: formTwoChoice[3], value: 3),
        ORKTextChoice(text: formTwoChoice[4], value: 4),
        ORKTextChoice(text: formTwoChoice[5], value: 5),
    ]
    
    let inputChoiceTwo = ORKTextAnswerFormat(maximumLength: 20)

    
    let secondAnswerFormat: ORKTextChoiceAnswerFormat = ORKAnswerFormat.choiceAnswerFormatWithStyle(.MultipleChoice, textChoices: textChoices)
    
    textFormItem = ORKFormItem(identifier: "questionStepTwoSelect", text: "Descriptor", answerFormat: secondAnswerFormat, optional: true)
    textFormItemTwo = ORKFormItem(identifier: "inputChoiceTwo", text: "Other", answerFormat: inputChoiceTwo, optional: true)
    
    formItemArray = [textFormItem, textFormItemTwo]
    
    formSecond.formItems = formItemArray
    
    
    //let firstQuestionStep = ORKQuestionStep(identifier: "TextChoiceQuestionStep", title: firstQuestionStepTitle, answer: firstAnswerFormat)
    steps += [formSecond]

    
    /*STEP THREE*/
    let formThird:ORKFormStep = ORKFormStep(identifier: "questionStepThree", title: "What symptoms did you experience?", text: "Select all that apply")
    
    let formThreeChoice:[String] = ["Racing heart", "Chest pain or discomfort","Difficulty breathing","Vision problems","Nausea","Shaking","Sweating","Dizziness","Numbness or tingling","Fear"]
    
    textChoices = [
        ORKTextChoice(text: formThreeChoice[0], value: 0),
        ORKTextChoice(text: formThreeChoice[1], value: 1),
        ORKTextChoice(text: formThreeChoice[2], value: 2),
        ORKTextChoice(text: formThreeChoice[3], value: 3),
        ORKTextChoice(text: formThreeChoice[4], value: 4),
        ORKTextChoice(text: formThreeChoice[5], value: 5),
        ORKTextChoice(text: formThreeChoice[6], value: 6),
        ORKTextChoice(text: formThreeChoice[7], value: 7),
        ORKTextChoice(text: formThreeChoice[8], value: 8),
        ORKTextChoice(text: formThreeChoice[9], value: 9),
    ]
    
    let inputChoiceThree = ORKTextAnswerFormat(maximumLength: 20)
    
    
    let ThirdAnswerFormat: ORKTextChoiceAnswerFormat = ORKAnswerFormat.choiceAnswerFormatWithStyle(.MultipleChoice, textChoices: textChoices)
    
    textFormItem = ORKFormItem(identifier: "questionStepThreeSelect", text: "Descriptor", answerFormat: ThirdAnswerFormat, optional: true)
    textFormItemTwo = ORKFormItem(identifier: "inputChoiceThree", text: "Other", answerFormat: inputChoiceThree, optional: true)
    
    formItemArray = [textFormItem, textFormItemTwo]
    
    formThird.formItems = formItemArray
    
    
    //let firstQuestionStep = ORKQuestionStep(identifier: "TextChoiceQuestionStep", title: firstQuestionStepTitle, answer: firstAnswerFormat)
    steps += [formThird]
    
    
    /*STEP FOUR*/
    let formFourth:ORKFormStep = ORKFormStep(identifier: "questionStepFour", title: "What tactics did you use to calm yourself down?", text: "Select all that apply")
    
    let formFourChoice:[String] = ["Breathing techniques","Talking it through with someone","Meditation","Calming music"]
    
    textChoices = [
        ORKTextChoice(text: formFourChoice[0], value: 0),
        ORKTextChoice(text: formFourChoice[1], value: 1),
        ORKTextChoice(text: formFourChoice[2], value: 2),
        ORKTextChoice(text: formFourChoice[3], value: 3)
    ]
    
    let inputChoiceFour = ORKTextAnswerFormat(maximumLength: 20)
    
    
    let FourthAnswerFormat: ORKTextChoiceAnswerFormat = ORKAnswerFormat.choiceAnswerFormatWithStyle(.MultipleChoice, textChoices: textChoices)
    
    textFormItem = ORKFormItem(identifier: "questionStepFourSelect", text: "Descriptor", answerFormat: FourthAnswerFormat, optional: true)
    textFormItemTwo = ORKFormItem(identifier: "inputChoiceFour", text: "Other", answerFormat: inputChoiceFour, optional: true)
    
    formItemArray = [textFormItem, textFormItemTwo]
    
    formFourth.formItems = formItemArray
    
    
    //let firstQuestionStep = ORKQuestionStep(identifier: "TextChoiceQuestionStep", title: firstQuestionStepTitle, answer: firstAnswerFormat)
    steps += [formFourth]

    
    return ORKOrderedTask(identifier: "SurveyTask", steps: steps)
    
    
    
}






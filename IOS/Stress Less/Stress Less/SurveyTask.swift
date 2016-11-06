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
    
    /*STEP FIVE*/
    let formFifth:ORKFormStep = ORKFormStep(identifier: "questionStepFive", title: "What tactics did you use to calm yourself down?", text: "Select all that apply")
    
    let formFiveChoice:[String] = ["1","2","3","4","5","6","7","8","9","10"]
    
    textChoices = [
        ORKTextChoice(text: formFiveChoice[0], value: 1),
        ORKTextChoice(text: formFiveChoice[1], value: 2),
        ORKTextChoice(text: formFiveChoice[2], value: 3),
        ORKTextChoice(text: formFiveChoice[3], value: 4),
        ORKTextChoice(text: formFiveChoice[4], value: 5),
        ORKTextChoice(text: formFiveChoice[5], value: 6),
        ORKTextChoice(text: formFiveChoice[6], value: 7),
        ORKTextChoice(text: formFiveChoice[7], value: 8),
        ORKTextChoice(text: formFiveChoice[8], value: 9),
        ORKTextChoice(text: formFiveChoice[9], value: 10),
    ]
    
    
    
    //let FifthAnswerFormat: ORKTextChoiceAnswerFormat = ORKAnswerFormat.choiceAnswerFormatWithStyle(.MultipleChoice, textChoices: textChoices)
    let FifthAnswerFormat: ORKValuePickerAnswerFormat = ORKAnswerFormat.valuePickerAnswerFormatWithTextChoices(textChoices)
    
    textFormItem = ORKFormItem(identifier: "questionStepFiveSelect", text: "Tap to select severity", answerFormat: FifthAnswerFormat, optional: true)
    //textFormItemTwo = ORKFormItem(identifier: "inputChoiceFive", text: "Other", answerFormat: inputChoiceFive, optional: true)
    
    formItemArray = [textFormItem]
    
    formFifth.formItems = formItemArray
    
    
    //let firstQuestionStep = ORKQuestionStep(identifier: "TextChoiceQuestionStep", title: firstQuestionStepTitle, answer: firstAnswerFormat)
    steps += [formFifth]
    
    /*STEP SIX*/
    let formSixth:ORKFormStep = ORKFormStep(identifier: "questionStepSix", title: "How long did the panic attack last?", text: "")
    let tempArray = ["5 min","10 min","15 min","20 min","30 min","45 min","1 hr.","2 hr.","3hr"]
    
    textChoices = [
        ORKTextChoice(text: tempArray[0], value: 5),
        ORKTextChoice(text: tempArray[1], value: 10),
        ORKTextChoice(text: tempArray[2], value: 15),
        ORKTextChoice(text: tempArray[3], value: 20),
        ORKTextChoice(text: tempArray[4], value: 30),
        ORKTextChoice(text: tempArray[5], value: 45),
        ORKTextChoice(text: tempArray[6], value: 60),
        ORKTextChoice(text: tempArray[7], value: 120),
        ORKTextChoice(text: tempArray[8], value: 180),
    ]
    
    //let formSixChoice:[ORKTextChoice] = textChoices
    //let pickerAnswer = ORKValuePickerAnswerFormat(textChoices: formSixChoice)
    
    
    //let SixthAnswerFormat: ORKTextChoiceAnswerFormat = ORKAnswerFormat.choiceAnswerFormatWithStyle(.MultipleChoice, textChoices: textChoices)
    
    let SixthAnswerFormat: ORKValuePickerAnswerFormat = ORKAnswerFormat.valuePickerAnswerFormatWithTextChoices(textChoices)
    textFormItem = ORKFormItem(identifier: "questionStepSixSelect", text: "Tap to Select duration", answerFormat: SixthAnswerFormat, optional: true)
    //textFormItemTwo = ORKFormItem(identifier: "inputChoiceSix", text: "Other", answerFormat: inputChoiceSix, optional: true)
    
    formItemArray = [textFormItem]
    
    formSixth.formItems = formItemArray
    
    
    //let firstQuestionStep = ORKQuestionStep(identifier: "TextChoiceQuestionStep", title: firstQuestionStepTitle, answer: firstAnswerFormat)
    steps += [formSixth]


    
    return ORKOrderedTask(identifier: "SurveyTask", steps: steps)
    
    
    
}






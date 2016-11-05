//
//  ConsentDocument.swift
//  Stress Less
//
//  Created by Reiker Seiffe on 11/5/16.
//  Copyright © 2016 Reiker R Seiffe. All rights reserved.
//

import Foundation
import ResearchKit

public var ConsentDocument: ORKConsentDocument {
    
    let consentDocument = ORKConsentDocument()
    consentDocument.title = "Example Consent"
    
    let consentSectionTypes: [ORKConsentSectionType] = [
        .Overview,
        .DataGathering,
        .Privacy,
        .DataUse,
        .TimeCommitment,
        .StudySurvey,
        .StudyTasks,
        .Withdrawing
    ]
    
    
    var consentSections: [ORKConsentSection] = consentSectionTypes.map { contentSectionType in
        let consentSection = ORKConsentSection(type: contentSectionType)
        switch(contentSectionType){
        case .Overview:
            consentSection.summary = "If you wish to complete this study..."
            consentSection.content = "In this study you will be asked five (wait, no, three!) questions. You will also have your voice recorded for ten seconds."
            break;
            
        default:
            consentSection.summary = "If you wish to complete this study..."
            consentSection.content = "In this study you will be asked five (wait, no, three!) questions. You will also have your voice recorded for ten seconds."
            break;
        }
        
        return consentSection
    }
    
    consentDocument.sections = consentSections
    
    consentDocument.addSignature(ORKConsentSignature(forPersonWithTitle: "Participant", dateFormatString: nil, identifier: "ConsentDocumentParticipantSignature"))
    
    return consentDocument
}

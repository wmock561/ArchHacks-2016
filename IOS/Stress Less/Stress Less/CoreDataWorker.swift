//
//  CoreDataWorker.swift
//  Stress Less
//
//  Created by Reiker Seiffe on 11/5/16.
//  Copyright © 2016 Reiker R Seiffe. All rights reserved.
//

import UIKit
import CoreData

class CoreDataWorker: NSObject {
    
    var managedObjectContext: NSManagedObjectContext!
    var user:User?
    
    
    func getToken()->User?{
        
        /*let appDelegate = UIApplication.sharedApplication().delegate as! AppDelegate //set the correct appDelegate to the one apple gives us for core data
        managedObjectContext = appDelegate.managedObjectContext //set variable to the managed context function in appDelegate
        
        let entityDescription = NSEntityDescription.entityForName("User", inManagedObjectContext: self.managedObjectContext)
        
        // Initialize Item
        let userDataObject = User(entity: entityDescription!, insertIntoManagedObjectContext: self.managedObjectContext)
        
        return userDataObject.token!
        
        
    }*/
        
        let appDelegate = UIApplication.sharedApplication().delegate as! AppDelegate //set the correct appDelegate to the one apple gives us for core data
        
        let managedContext = appDelegate.managedObjectContext//set variable to the managed context function in appDelegate
        let fetchRequest = NSFetchRequest(entityName:"User") // set a fetch to the the entity from core data of type MyGroups
        
        
        do {
            let fetchedResults = //set fetchedResults to below
                try managedContext.executeFetchRequest(fetchRequest) as? [User] //exicute the fetch for the type filler and downcast as a NSManagedObject
            
            if let results = fetchedResults { //unwrap optional and set the result to results
                print(results) //print to console for error checking
                if(results.count == 0){ //if the is nothing coming back from core data then return nil
                    return nil
                }
                return results[0] //return the first index of data
            } else {
                print("Could not fetch MyGroups data") //error checking
            }
        } catch {
            return nil //if the unwrap is unsuccesful then return nil
        }
        return nil //do failed so return nil
    }
    
    func saveSurveyData(){
    
    }
}


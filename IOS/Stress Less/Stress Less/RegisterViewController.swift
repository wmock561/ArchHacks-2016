//
//  RegisterViewController.swift
//  Stress Less
//
//  Created by Reiker Seiffe on 11/4/16.
//  Copyright © 2016 Reiker R Seiffe. All rights reserved.
//

import UIKit
import CoreData

class RegisterViewController: UIViewController {
    
    let webController = WebWorker()


    @IBOutlet weak var usernameField: UITextField!
    @IBOutlet weak var passwordField: UITextField!
    @IBOutlet weak var confirmPasswordField: UITextField!
    @IBOutlet weak var createButton: UIButton!
    @IBOutlet weak var errorLabel: UILabel!
    
    @IBOutlet var textInputs: [UITextField]!
    
    
    var userToken:String?
    
    var managedObjectContext: NSManagedObjectContext!
    
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        let appDelegate = UIApplication.sharedApplication().delegate as! AppDelegate //set the correct appDelegate to the one apple gives us for core data
        managedObjectContext = appDelegate.managedObjectContext //set variable to the managed context function in appDelegate

        // Do any additional setup after loading the view.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func createAccount(sender: AnyObject) {
        if(usernameField.text == "" || passwordField == "" || confirmPasswordField == ""){
            print("empty field")
            errorLabel.text = "Please Fill in all of the boxes"
        }
        
        if(passwordField.text != confirmPasswordField.text){
            print("bad pass confirm")
            passwordField.layer.borderColor = UIColor.redColor().CGColor
            passwordField.layer.borderColor = UIColor.redColor().CGColor
        }else{
            webController.register(usernameField.text!, password: passwordField.text!){
                (result:NSDictionary?, error:String?) in
                if let result = result{
                    print("Result" + String(result))
                    self.userToken = String(result["token"]!)
                    print(self.userToken!)
                    
                    let entityDescription = NSEntityDescription.entityForName("User", inManagedObjectContext: self.managedObjectContext)
                    
                    // Initialize Item
                    let userDataObject = User(entity: entityDescription!, insertIntoManagedObjectContext: self.managedObjectContext)
                    
                    userDataObject.token = self.userToken
                    userDataObject.email = self.usernameField.text
                    
                    do {
                        try userDataObject.managedObjectContext?.save()
                        print("Saved Group")
                        //performSegueWithIdentifier("popBackToMyGroups", sender: nil)
                    } catch {
                        let saveError = error as NSError
                        print("\(saveError), \(saveError.userInfo)")
                    }
                    
                    /*if(userDataObject != nil){
                        print("core data was not nil")
                    }*/
                    
                    //let entityDescription = NSEntityDescription.entityForName("User", inManagedObjectContext: self.managedObjectContext)
                    
                    // Initialize Item
                    //let dataObject = User(entity: entityDescription!, insertIntoManagedObjectContext: self.managedObjectContext)
                    
                    

                    print("filled data object")
                    
                    print(userDataObject.token!)
                    
                    dispatch_async(dispatch_get_main_queue()){
                        self.performSegueWithIdentifier("afterRegister", sender: self)
                    }
                    
                    
                    
                    
                }
            }
        }
        
        
    }
    
    
    @IBAction func resignKeyboard(sender: AnyObject) {
        for input in textInputs{
            input.resignFirstResponder()
        }
    }


    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
        
        let controller = segue.destinationViewController as! InfoViewController
        controller.token = userToken!
        
    }
    

}

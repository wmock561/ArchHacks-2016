//
//  LoginViewController.swift
//  Stress Less
//
//  Created by Reiker Seiffe on 11/4/16.
//  Copyright © 2016 Reiker R Seiffe. All rights reserved.
//

import UIKit
import CoreData


class LoginViewController: UIViewController {
    
    var webController = WebWorker()
    var dataWorker = CoreDataWorker()
    var user:User?
    
    @IBOutlet weak var usernameField: UITextField!
    @IBOutlet weak var passwordField: UITextField!
    @IBOutlet weak var loginButton: UIButton!
    @IBOutlet weak var errorLabel: UILabel!
    
    var userToken:String = ""
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
    
    
    @IBAction func login(sender: AnyObject) {
        if (usernameField == "" || passwordField == ""){
            errorLabel.text = "Please fill in both Username and Password"
        }else{
            webController.login(usernameField.text!, password: passwordField.text!){
                (result:NSDictionary?, error:String?) in
                if let result = result{
                    print("Result" + String(result))
                    self.userToken = String(result["token"]!)
                    print(self.userToken)
                    
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
                        print("didnt save")
                        let saveError = error as NSError
                        print("\(saveError), \(saveError.userInfo)")
                    }
                    
                    /*if(userDataObject != nil){
                     print("core data was not nil")
                     }*/
                    
                    //let entityDescription = NSEntityDescription.entityForName("User", inManagedObjectContext: self.managedObjectContext)
                    
                    // Initialize Item
                    //let dataObject = User(entity: entityDescription!, insertIntoManagedObjectContext: self.managedObjectContext)
                    
                    let consent = self.dataWorker.getConcent()
                    print("THIS IS CONSENT: \(consent)")
                    if(consent == true){
                        print("Got consent")
                        dispatch_async(dispatch_get_main_queue()){
                            let storyBoard : UIStoryboard = UIStoryboard(name: "Main", bundle:nil)
                            let nextViewController = storyBoard.instantiateViewControllerWithIdentifier("Main")
                            self.presentViewController(nextViewController, animated:true, completion:nil)
                        }
                    }else{
                        dispatch_async(dispatch_get_main_queue()){
                            print("Got nothing back form core data")
                            let storyBoard : UIStoryboard = UIStoryboard(name: "Main", bundle:nil)
                            let nextViewController = storyBoard.instantiateViewControllerWithIdentifier("ConsentVC")
                            self.presentViewController(nextViewController, animated:true, completion:nil)
                        }
                    }

                    
                    print("filled data object")
                    
                    print(userDataObject.token!)
                    
                    

                    
                    

        }
    }
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */

}
}
}

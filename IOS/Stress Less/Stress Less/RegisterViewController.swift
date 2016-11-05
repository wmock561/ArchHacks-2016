//
//  RegisterViewController.swift
//  Stress Less
//
//  Created by Reiker Seiffe on 11/4/16.
//  Copyright © 2016 Reiker R Seiffe. All rights reserved.
//

import UIKit

class RegisterViewController: UIViewController {
    
    let webController = WebWorker()


    @IBOutlet weak var usernameField: UITextField!
    @IBOutlet weak var passwordField: UITextField!
    @IBOutlet weak var confirmPasswordField: UITextField!
    @IBOutlet weak var createButton: UIButton!
    @IBOutlet weak var errorLabel: UILabel!
    
    var userToken:String?
    
    
    
    override func viewDidLoad() {
        super.viewDidLoad()

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
                }
            }
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

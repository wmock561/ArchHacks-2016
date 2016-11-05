//
//  LoginViewController.swift
//  Stress Less
//
//  Created by Reiker Seiffe on 11/4/16.
//  Copyright © 2016 Reiker R Seiffe. All rights reserved.
//

import UIKit

class LoginViewController: UIViewController {
    
     var webController = WebWorker()
    
    @IBOutlet weak var usernameField: UITextField!
    @IBOutlet weak var passwordField: UITextField!
    @IBOutlet weak var loginButton: UIButton!
    @IBOutlet weak var errorLabel: UILabel!
    

    override func viewDidLoad() {
        super.viewDidLoad()

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

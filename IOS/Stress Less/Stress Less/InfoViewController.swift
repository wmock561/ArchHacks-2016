//
//  InfoViewController.swift
//  Stress Less
//
//  Created by Reiker Seiffe on 11/5/16.
//  Copyright © 2016 Reiker R Seiffe. All rights reserved.
//

import UIKit

class InfoViewController: UIViewController {
    
    
    @IBOutlet weak var firstNameField: UITextField!
    @IBOutlet weak var ageField: UITextField!
    @IBOutlet weak var lastNameField: UITextField!
    @IBOutlet weak var maleButton: UIButton!
    @IBOutlet weak var femaleButton: UIButton!
    @IBOutlet weak var otherButton: UIButton!
    
    var webController = WebWorker()
    
    var firstName = ""
    var lastName = ""
    var age = ""
    var gender = ""
    var token = ""

    override func viewDidLoad() {
        super.viewDidLoad()

        // Do any additional setup after loading the view.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func setMale(sender: AnyObject) {
        gender = "male"
    }
    
    
    @IBAction func setFemale(sender: AnyObject) {
        gender = "female"
    }
    
    @IBAction func setOther(sender: AnyObject) {
        gender = "other"
    }
    
    
    @IBAction func saveData(sender: AnyObject) {
        firstName = firstNameField.text!
        lastName = lastNameField.text!
        age = ageField.text!
        
        let ethnicity = ""
        let occupation = ""
        
        
        let url = "http://ec2-35-162-212-55.us-west-2.compute.amazonaws.com/api/savePersonalInformation"
        let post:String = "token=\(token)&firstName=\(firstName)&lastName=\(lastName)&age=\(age)&gender=\(gender)&ethnicity=\(ethnicity)&occupation=\(occupation)"

        
        let postData: NSData = post.dataUsingEncoding(NSASCIIStringEncoding, allowLossyConversion: true)!
        let postLength: String = "\(postData.length)"
        let request: NSMutableURLRequest = NSMutableURLRequest()
        request.URL = NSURL(string: url)
        request.HTTPMethod = "POST"
        request.setValue(postLength, forHTTPHeaderField: "Content-Length")
        request.setValue("application/x-www-form-urlencoded", forHTTPHeaderField: "Content-Type")
        request.HTTPBody = postData
        
        //print("Request: " + String(request))
        
        let task = NSURLSession.sharedSession().dataTaskWithRequest(request) {
            (let data, let response, let error) in
            //print("Ran the request and the data was: \(data)")
            if (data != nil) {
                print("Ran the request and the data was: \(data!)")
                print("response is: " + String(response))
                dispatch_async(dispatch_get_main_queue()){
                    self.performSegueWithIdentifier("afterInfo", sender: self)
                }
            }
            
        }
        
        task.resume()// run the call
        
        
        /*webController.extraInfo(token, firstName: firstName, lastName: lastName, age: age, gender: gender, ethnicity: ethnicity, occupation: occupation){
            (result:NSDictionary?, error:String?) in
            if let result = result{
                print("Result" + String(result))
                
                dispatch_async(dispatch_get_main_queue()){
                    self.performSegueWithIdentifier("afterInfo", sender: self)
                }
                
            }
            dispatch_async(dispatch_get_main_queue()){
                self.performSegueWithIdentifier("afterInfo", sender: self)
            }
            
        }*/
        
        
        
    }
    
    

    
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        let controller = segue.destinationViewController as? PinViewController
        controller?.token = token
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }

}

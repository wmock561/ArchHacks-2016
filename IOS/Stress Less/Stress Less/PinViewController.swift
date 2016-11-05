//
//  PinViewController.swift
//  Stress Less
//
//  Created by Reiker Seiffe on 11/5/16.
//  Copyright © 2016 Reiker R Seiffe. All rights reserved.
//

import UIKit

class PinViewController: UIViewController {
    
    var token:String?
    let webController = WebWorker()
    
    @IBOutlet weak var pinField: UITextField!
    @IBOutlet weak var confirmPinField: UITextField!
    @IBOutlet weak var continueButton: UIButton!
    
    
    @IBOutlet var textInputs: [UITextField]!

    override func viewDidLoad() {
        super.viewDidLoad()

        // Do any additional setup after loading the view.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func saveData(sender: AnyObject) {
        if(pinField.text != confirmPinField.text){
            print("pins dont match")
            return
        }else{
            let pin = pinField.text
            let url = "http://ec2-35-162-212-55.us-west-2.compute.amazonaws.com/api/pin"
            
            let post:String = "token=\(token!)&pin=\(pin!)"
            
            let escapedAddress = post.stringByAddingPercentEscapesUsingEncoding(NSUTF8StringEncoding)
            
            print("escaped address" + escapedAddress!)
            
            
            let postData: NSData = escapedAddress!.dataUsingEncoding(NSASCIIStringEncoding, allowLossyConversion: true)!
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
                        self.performSegueWithIdentifier("afterPin", sender: self)
                    }
                }
                
            }
            
            task.resume()// run the call
            
            
        }
    }
    
    @IBAction func resingKeyboard(sender: AnyObject) {
        for input in textInputs{
            input.resignFirstResponder()
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

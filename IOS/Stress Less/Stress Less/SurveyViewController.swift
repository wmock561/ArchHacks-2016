//
//  SurveyViewController.swift
//  Stress Less
//
//  Created by Reiker Seiffe on 11/5/16.
//  Copyright © 2016 Reiker R Seiffe. All rights reserved.
//

import UIKit
import ResearchKit
import CoreData

extension SurveyViewController : ORKTaskViewControllerDelegate {
    
    func taskViewController(taskViewController: ORKTaskViewController, didFinishWithReason reason: ORKTaskViewControllerFinishReason, error: NSError?) {
        //Handle results with taskViewController.result
        //print(taskViewController.result.stepResultForStepIdentifier("ConsentReviewStep")!.results![0].valueForKey("consented"))
        taskViewController.dismissViewControllerAnimated(true, completion: nil)
        
        parseRKData(taskViewController)
        
        /*
         if(taskViewController.result.identifier == "ConsentTask"){/*
         let result = taskViewController.result
         if let stepResult = result.stepResultForStepIdentifier("ConsentReviewStep"),
         let signatureResult = stepResult.results?.first as? ORKConsentSignatureResult {
         let consentDocument = ConsentDocument
         signatureResult.applyToDocument(consentDocument)
         
         consentDocument.makePDFWithCompletionHandler { (data, error) -> Void in
         let tempPath = NSTemporaryDirectory() as NSString
         let path = tempPath.stringByAppendingPathComponent("signature.pdf")
         data?.writeToFile(path, atomically: true)
         // print(path)
         /*self.documentInteractionController = UIDocumentInteractionController.init(URL: NSURL(fileURLWithPath: path))
         self.documentInteractionController?.delegate = self
         self.documentInteractionController?.presentPreviewAnimated(true)*/
         }
         if signatureResult.consented{
         let taskViewController2 = ORKTaskViewController(task: SurveyTask, taskRunUUID: nil)
         taskViewController2.delegate = self
         presentViewController(taskViewController2, animated: true, completion: nil)
         }
         }else{
         print("Unable to get consent value")
         }*/
         }else{
         //print(taskViewController.result.stepResultForStepIdentifier("questionStepOne")?.results![1].valueForKey("answer")!)
         parseRKData(taskViewController)
         
         }*/
    }
    
}

class SurveyViewController: UIViewController,UIDocumentInteractionControllerDelegate {
    
    let dataWorker = CoreDataWorker()
    let webController = WebWorker()
    
    @IBOutlet weak var inputField: UITextField!
    
    @IBOutlet weak var emailInput: UIButton!
    override func viewDidLoad() {
        super.viewDidLoad()
        
        let taskViewController2 = ORKTaskViewController(task: SurveyTask, taskRunUUID: nil)
        taskViewController2.delegate = self
        presentViewController(taskViewController2, animated: true, completion: nil)
        
        // Do any additional setup after loading the view.
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func consentButton(sender: AnyObject) {
        /*let taskViewController = ORKTaskViewController(task: ConsentTask, taskRunUUID: nil)
         taskViewController.delegate = self
         presentViewController(taskViewController, animated: true, completion: nil)*/
        
        
    }
    
    override func viewWillAppear(animated: Bool) {
        
    }
    
    func documentInteractionControllerViewControllerForPreview(controller: UIDocumentInteractionController) -> UIViewController {
        return self
    }
    
    func parseRKData(task:ORKTaskViewController){
        
        let formOneChoice:[String] = ["Home","Work","School","Car"]
        let formTwoChoice:[String] = ["People","Places","Thoughts","Surroundings","Events","Diet"]
        let formThreeChoice:[String] = ["Racing heart", "Chest pain or discomfort","Difficulty breathing","Vision problems","Nausea","Shaking","Sweating","Dizziness","Numbness or tingling","Fear"]
        let formFourChoice:[String] = ["Breathing techniques","Talking it through with someone","Meditation","Calming music"]
        
        /*Form one data parse*/
        var formOneText:String = ""
        
        /*if let test = task.result.stepResultForStepIdentifier("questionStepOne")?.results![0].valueForKey("answer")!{
            print("Got into number 1")
        }else{
            return
        }*/
        
        if(task.result.stepResultForStepIdentifier("questionStepOne")?.results![1].valueForKey("answer") != nil){
            formOneText = (task.result.stepResultForStepIdentifier("questionStepThree")?.results![1].valueForKey("answer")! as? String)!
        }
        
        
        
        
        let formOneOptions = task.result.stepResultForStepIdentifier("questionStepOne")?.results![0].valueForKey("answer")!
        
        if(task.result.stepResultForStepIdentifier("questionStepOne")?.results![1].valueForKey("answer") != nil){
            formOneText = (task.result.stepResultForStepIdentifier("questionStepOne")?.results![1].valueForKey("answer")! as? String)!
        }
        
        
        
        print(task.result.stepResultForStepIdentifier("questionStepOne")?.results![0].valueForKey("answer")!.count!)
        print(formOneOptions!)
        //print(formOneText!)
        
        var formOneArray:[String] = []
        
        for index:Int in (formOneOptions as? Array)!{
            print("Index is: \(index)")
            formOneArray.append(formOneChoice[index])
        }
        
        if(formOneText != ""){
            formOneArray.append(formOneText)
            print("text data was full")
        }
        
        
        
        print(formOneArray)
        
        print("-------------------------")
        
        /*Form two data parse*/
        var formTwoText:String = ""
        
        let formTwoOptions = task.result.stepResultForStepIdentifier("questionStepTwo")?.results![0].valueForKey("answer")!
        
        if(task.result.stepResultForStepIdentifier("questionStepTwo")?.results![1].valueForKey("answer") != nil){
            formTwoText = (task.result.stepResultForStepIdentifier("questionStepTwo")?.results![1].valueForKey("answer")! as? String)!
        }
        
        
        
        print(task.result.stepResultForStepIdentifier("questionStepTwo")?.results![0].valueForKey("answer")!.count!)
        print(formTwoOptions!)
        //print(formOneText!)
        
        var formTwoArray:[String] = []
        
        for index:Int in (formTwoOptions as? Array)! {
            print("Index is: \(index)")
            formTwoArray.append(formTwoChoice[index])
        }
        
        if(formTwoText != ""){
            formTwoArray.append(formTwoText)
            print("text data was full")
        }
        
        
        
        print(formTwoArray)
        
        print("-------------------------")
        
        /*Form Three data parse*/
        var formThreeText:String = ""
        
        let formThreeOptions = task.result.stepResultForStepIdentifier("questionStepThree")?.results![0].valueForKey("answer")!
        
        if(task.result.stepResultForStepIdentifier("questionStepThree")?.results![1].valueForKey("answer") != nil){
            formThreeText = (task.result.stepResultForStepIdentifier("questionStepThree")?.results![1].valueForKey("answer")! as? String)!
        }
        
        
        
        print(task.result.stepResultForStepIdentifier("questionStepThree")?.results![0].valueForKey("answer")!.count!)
        print(formThreeOptions!)
        //print(formOneText!)
        
        var formThreeArray:[String] = []
        
        for index:Int in (formThreeOptions as? Array)! {
            print("Index is: \(index)")
            formThreeArray.append(formThreeChoice[index])
        }
        
        if(formThreeText != ""){
            formThreeArray.append(formThreeText)
            print("text data was full")
        }
        
        
        
        print(formThreeArray)
        
        print("-------------------------")
        
        /*Form Four data parse*/
        var formFourText:String = ""
        
        let formFourOptions = task.result.stepResultForStepIdentifier("questionStepFour")?.results![0].valueForKey("answer")!
        
        if(task.result.stepResultForStepIdentifier("questionStepFour")?.results![1].valueForKey("answer") != nil){
            formFourText = (task.result.stepResultForStepIdentifier("questionStepFour")?.results![1].valueForKey("answer")! as? String)!
        }
        
        
        
        print(task.result.stepResultForStepIdentifier("questionStepFour")?.results![0].valueForKey("answer")!.count!)
        print(formFourOptions!)
        //print(formOneText!)
        
        var formFourArray:[String] = []
        
        for index:Int in (formFourOptions as? Array)! {
            print("Index is: \(index)")
            formFourArray.append(formFourChoice[index])
        }
        
        if(formFourText != ""){
            formFourArray.append(formFourText)
            print("text data was full")
        }
        
        
        
        print(formFourArray)
        
        print("-------------------------")
        
        /*Form Five data parse*/
        //var formFiveText:String = ""
        
        let formFiveOptions = task.result.stepResultForStepIdentifier("questionStepFive")?.results![0].valueForKey("answer")!
        
        /*if(task.result.stepResultForStepIdentifier("questionStepFive")?.results![1].valueForKey("answer") != nil){
            formFiveText = (task.result.stepResultForStepIdentifier("questionStepFive")?.results![1].valueForKey("answer")! as? String)!
        }*/
        
        
        
        print(task.result.stepResultForStepIdentifier("questionStepFive")?.results![0].valueForKey("answer")!.count!)
        print("Form: \(formFiveOptions!)")
        //print(formOneText!)
        
        var formFiveArray:[String] = []
        
        for index:Int in (formFiveOptions as? Array)! {
            print("Index is: \(index)")
            formFiveArray.append(String(index))
        }
        
        //let formFiveArray:[String] = [formFiveOptions! as! String]
        
        /*for index:Int in (formFiveOptions as? Array)! {
            print("Index is: \(index)")
            formFiveArray.append(formFiveChoice[index])
        }
        
        if(formFiveText != ""){
            formFiveArray.append(formFiveText)
            print("text data was full")
        }*/
        
        
        print(formFiveArray)
        
        print("-------------------------")
        
        /*Form Six data parse*/
        //var formSixText:String = ""
        
        let formSixOptions = task.result.stepResultForStepIdentifier("questionStepSix")?.results![0].valueForKey("answer")!
        
        /*if(task.result.stepResultForStepIdentifier("questionStepSix")?.results![1].valueForKey("answer") != nil){
            formSixText = (task.result.stepResultForStepIdentifier("questionStepSix")?.results![1].valueForKey("answer")! as? String)!
        }*/
        
        
        
        print(task.result.stepResultForStepIdentifier("questionStepSix")?.results![0].valueForKey("answer")!.count!)
        print(formSixOptions!)
        //print(formOneText!)
        
        var formSixArray:[String] = []
        
        for index:Int in (formSixOptions as? Array)! {
            print("Index is: \(index)")
            formSixArray.append(String(index))
        }

        
        /*for index:Int in (formSixOptions as? Array)! {
            print("Index is: \(index)")
            formSixArray.append(formSixChoice[index])
        }
        
        if(formSixText != ""){
            formSixArray.append(formSixText)
            print("text data was full")
        }
        */
        
        
        print(formSixArray)
        
        let masterArray = [formOneArray, formTwoArray,formThreeArray,formFourArray,formFiveArray, formSixArray]
        
        print("master \(masterArray)")
        
        POSTData(masterArray)
        
        
    }
    
    func POSTData(masterArray:[[String]]){
        var tokenO = dataWorker.getToken()
        var token = tokenO?.token
        print("token: \(token)")
        
        
        let url = "http://ec2-35-162-212-55.us-west-2.compute.amazonaws.com/api/storeSurveyAnswers"
        var escapedToken = token!.stringByAddingPercentEncodingWithAllowedCharacters(NSCharacterSet.URLQueryAllowedCharacterSet())
        let post:String = "token=\(escapedToken!)&surveyData=\(masterArray)"
        print("excaped Token: " + escapedToken!)
        print("\n\n Full request: \(post) \n\n")
        
        
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
            }
            
        }
        
        task.resume()// run the call
    }
    
    func displayAlert(){
        let alert = UIAlertController(title: "Share?", message: "This feature will allow you to send this data to a friend or family member.", preferredStyle: UIAlertControllerStyle.Alert)
        //alert.addAction(UIAlertAction(title: "Click", style: UIAlertActionStyle.Default, handler: nil))
        alert.addAction(UIAlertAction(title: "Yes", style: .Default, handler: { action in
            switch action.style{
            case .Default:
                
                print("Hop on main thread")
                //dispatch_async(dispatch_get_main_queue()){
                    let storyBoard : UIStoryboard = UIStoryboard(name: "Main", bundle:nil)
                    let nextViewController = storyBoard.instantiateViewControllerWithIdentifier("TabBarController") as! UITabBarController
                    self.presentViewController(nextViewController, animated:true, completion:nil)

                //}
                
                
            case .Cancel:
                print("cancel")
                
            case .Destructive:
                print("destructive")
            }
        }))
                self.presentViewController(alert, animated: true, completion: nil)
        
    }
    
    
    @IBAction func shareResults(sender: AnyObject) {
        let email = inputField.text
        let token = dataWorker.getToken()
        
        let url = "http://ec2-35-162-212-55.us-west-2.compute.amazonaws.com/api/shareSurvey"
        
        let post:String = "token=\(token!.token!)&email=\(email!)"
        
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
                
                
                print("calling alert")
                
                dispatch_async(dispatch_get_main_queue()){
                    self.displayAlert()
                }
                
                
            }
        }
        
        task.resume()// run the call

        
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

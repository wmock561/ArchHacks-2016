//
//  WebWorker.swift
//  Hack Mizzou 2016
//
//  Created by Reiker Seiffe on 10/14/16.
//  Copyright © 2016 Reiker R Seiffe. All rights reserved.
//

import UIKit

class WebWorker: NSObject {
    
    func login(username:String, password:String, completion: (result:NSDictionary?, error:String?)->Void){
        let url = "http://ec2-35-162-212-55.us-west-2.compute.amazonaws.com/api/login"
        let post:String = "email=\(username)&password=\(password)"
        
        print("post string: " + post)
        
        self.requestHandler(url, post: post){
            (result:NSDictionary?, error:String?) in
            if let result = result{
                completion(result:result, error:error)
            }
        }
        
    }

    
    func register(email:String, password:String, completion: (result:NSDictionary?, error:String?)->Void){
        let url = "http://ec2-35-162-212-55.us-west-2.compute.amazonaws.com/api/register"
        let post:String = "email=\(email)&password=\(password)"
        
        print(post)
        
        
        self.requestHandler(url, post: post){
            (result:NSDictionary?, error:String?) in
            if let result = result{
                completion(result:result, error:error)
            }
        }
    
    }
    
    
    func pin(token:String, pin:String, completion: (result:NSDictionary?, error:String?)->Void){
        let url = "http://ec2-35-162-212-55.us-west-2.compute.amazonaws.com/api/pin"
        let post:String = "token=\(token)&pin=\(pin)"
        
        print(post)
        
        
        self.requestHandler(url, post: post){
            (result:NSDictionary?, error:String?) in
            if let result = result{
                completion(result:result, error:error)
            }
        }
        
    }
    
    
/*---------------------------DONT TOUCH----------------------------------*/
    
    /*func requestHandlerNoJSON(url:String, post: String, completion: (result:NSDictionary?, error:String?)->Void){
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
                completion(result:data, error:error)
            }
            
        }
        
        task.resume()// run the call
        
    }*/

    

    func requestHandler(url:String, post: String, completion: (result:NSDictionary?, error:String?)->Void){
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
                self.parseJSON(data!){
                    (result:NSDictionary?, error:String?) in
                    //print("Got the JSON array back: \(result)")
                    completion(result:result, error:error)
                }
            }else{
                print("Data was nil")
                completion(result:nil, error:String(error))
            }
            
        }
        
        task.resume()// run the call    
        
    }
    
    
    
    
    func parseJSON(jsonData: NSData, completion: (result:NSDictionary?, error:String?)->Void) -> Void{
        //print("parse json called")
        //let dataString = String(data: jsonData, encoding: NSUTF8StringEncoding)
        //print("JSON data: " + dataString!)
        var jsonResultWrapped: NSDictionary?//array variable
        do {//do try catch
            //print("Trying to parse")
            jsonResultWrapped = try NSJSONSerialization.JSONObjectWithData(jsonData, options: .MutableContainers) as? NSDictionary//casts as NSDictionary
            
        } catch let caught as NSError {
            
            print("\(caught)")//print the error
            print("parseJSON completion -> error")
            completion(result:nil,error:String(caught))
        }
        //print("\(jsonResultWrapped)")
        if let jsonResult = jsonResultWrapped {//unwrap the optional
            //print("parseJSON completion -> success")
            completion(result:jsonResult, error:nil)
            
        }
    }
}

    


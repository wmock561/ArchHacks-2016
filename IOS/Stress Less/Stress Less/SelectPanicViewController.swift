//
//  SelectPanicViewController.swift
//  Stress Less
//
//  Created by Reiker Seiffe on 11/5/16.
//  Copyright © 2016 Reiker R Seiffe. All rights reserved.
//

import UIKit

class SelectPanicViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()

        // Do any additional setup after loading the view.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func callContact(sender: AnyObject) {
        UIApplication.sharedApplication().openURL(NSURL(string: "tel://18167520068")!)
    }
    
    @IBAction func recordLater(sender: AnyObject) {
        displayAlert()
    }
    
    
    func displayAlert(){
        let alert = UIAlertController(title: "Save for later", message: "We will send you a notification in an hour so you can log it then", preferredStyle: UIAlertControllerStyle.Alert)
        //alert.addAction(UIAlertAction(title: "Click", style: UIAlertActionStyle.Default, handler: nil))
        alert.addAction(UIAlertAction(title: "Ok", style: .Default, handler: { action in
            print("OK")
            let storyBoard : UIStoryboard = UIStoryboard(name: "Main", bundle:nil)
            
            let nextViewController = storyBoard.instantiateViewControllerWithIdentifier("TabBarController") as! UITabBarController
            self.presentViewController(nextViewController, animated:true, completion:nil)
            
        }))
        self.presentViewController(alert, animated: true, completion: nil)
        
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

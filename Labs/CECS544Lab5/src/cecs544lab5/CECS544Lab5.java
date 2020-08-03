/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cecs544lab5;

/**
 *
 * @author lvaro
 */
public class CECS544Lab5 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        cecs544lab5.Subject s = new cecs544lab5.Subject();
        
       cecs544lab5.Observer1 o1 =  new cecs544lab5.Observer1("Dr. Oofdoom");
        s.attach(o1);
        
        s.setState(2,3);
        System.out.println("================================");
        cecs544lab5.Observer2 o2 = new cecs544lab5.Observer2("Mrs. Hurricane");
        s.attach(o2);
        
        s.setState(3,4);
        System.out.println("================================"); 
        o2 = new cecs544lab5.Observer2("Mr. Muffuletta");
        s.attach(o2);
        s.setState(4,5);
        System.out.println("================================"); 
        s.detach(o2);
        s.setState(0, 0);
    }
    
}

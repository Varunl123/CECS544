/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cecs544lab4;

/**
 *
 * @author lvaro
 */
public class CECS544Lab4 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Beverage	b = new Expresso();
	
		System.out.print(b.getDesc()); System.out.print("    $"); System.out.println(b.cost());
	
	
		b = new Mocha(b);
  
		System.out.print(b.getDesc()); System.out.print("    $"); System.out.println(b.cost());
		b = new Whip(b);
		System.out.print(b.getDesc()); System.out.print("    $"); System.out.println(b.cost());
  
		Beverage	b2 = new Houseblend();
		b2 = new Mocha(b2);
	    b2 = new Whip(b2);
	    b2 = new Mocha(b2);
	    System.out.print(b2.getDesc()); System.out.print("    $"); System.out.println(b2.cost());
    }
    
}

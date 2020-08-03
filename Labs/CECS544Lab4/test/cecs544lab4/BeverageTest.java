/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cecs544lab4;

import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author lvaro
 */
class BeverageImpl extends Beverage{
    
}
public class BeverageTest {
    
    @Test
    public void testgetDesc(){
        System.out.println("getDesc");
        Beverage instance=new BeverageImpl();
        String expected="unknown beverage";
        
        assertEquals(instance.getDesc(),expected);
        
        
    }
    @Test
    public void testCost(){
        System.out.println("cost");
        Beverage instance=new BeverageImpl();
        double expected=0.0;
        assertEquals(instance.cost(),expected,0.0);
    }
    
}

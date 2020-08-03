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
public class ExpressoTest {
    
    public ExpressoTest() {
    }

    /**
     * Test of cost method, of class Expresso.
     */
    @Test
    public void testCost() {
        System.out.println("cost");
        Expresso instance = new Expresso();
        double expResult = 1.99;
        double result = instance.cost();
        //System.out.println(result);
        assertEquals(expResult, result, 0.0);
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }
    @Test
    public void testDesc(){
        System.out.println("getDesc");
        String expected="Expresso";
        Expresso instance=new Expresso();
        String result=instance.getDesc();
        //System.out.println(result);
        assertEquals(expected,result);
    }
    
}

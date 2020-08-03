/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cecs544lab5;

import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author lvaro
 */
public class SubjectTest {
    
    public SubjectTest() {
    }

    /**
     * Test of attach method, of class Subject.
     */
    @org.junit.Test
    public void testAttach() {
        System.out.println("attach");
        Observer o =null;
        Subject instance = new Subject();
        boolean expResult = false;
        boolean result = instance.attach(o);
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of detach method, of class Subject.
     */
    @org.junit.Test
    public void testDetach() {
        System.out.println("detach");
        Observer o = null;
        Subject instance = new Subject();
        Observer expResult = null;
        Observer result = instance.detach(o);
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of Notify method, of class Subject.
     */
    @org.junit.Test
    public void testNotify() {
        System.out.println("Notify");
        Subject instance = new Subject();
        instance.Notify();
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }

    /**
     * Test of setState method, of class Subject.
     */
    @org.junit.Test
    public void testSetState() {
        System.out.println("setState");
        int x = 0;
        int y = 0;
        Subject instance = new Subject();
        instance.setState(x, y);
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }
    
}

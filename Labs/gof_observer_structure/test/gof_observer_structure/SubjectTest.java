/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gof_observer_structure;

import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;

public class SubjectTest {
    
    static Subject s;
    public SubjectTest() {
    }
   
    @BeforeClass
    public static void setUpClass() {
        s=new Subject();
        System.out.println("***Setting up class subject");
        Observer1 ob1=new Observer1("Dr. Oofdoom");
        s.attach(ob1);
        s.setState(41, 7);
    }
    
    @Before
    public void setUp() {
    }

    /**
     * Test of attach method, of class Subject.
     */
    
    
   

    /**
     * Test of detach method, of class Subject.
     */
    @Test
    public void testDetach() {
        //System.out.println("detach");
        System.out.println("**Testing detach");
        //Observer o = null;
        Observer1 ob3=new Observer1("Mr. Muffuletta");
        s.attach(ob3);
        s.detach(ob3);
       // Subject instance = new Subject();
        //Observer expResult = null;
        //Observer result = instance.detach(o);
        //assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }

    /**
     * Test of Notify method, of class Subject.
     */
    @Test
    public void testNotify() {
        //System.out.println("Notify");
        System.out.println("***Testing Notify");
        s.Notify();
        //Subject instance = new Subject();
        //instance.Notify();
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }

    /**
     * Test of setState method, of class Subject.
     */
    @Test
    public void testSetState() {
        //System.out.println("setState");
        System.out.println("***Testing setState");
        int x = 0;
        int y = 0;
        /*Subject instance = new Subject();
        instance.setState(x, y);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype."); */
        s.setState(x, y);
    }
     @Test
    public void testAttach() {
       // System.out.println("attach");
        System.out.println("***Testing attach");
        //Observer o = null;
        Observer1 ob2=new Observer1("Mrs. Hurricane");
        s.attach(ob2);
        //Subject instance = new Subject();
        //boolean expResult = false;
       // boolean result = instance.attach(o);
       // assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }
    
}

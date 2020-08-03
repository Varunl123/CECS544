/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package lab6;

import org.junit.After;
import org.junit.AfterClass;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author lvaro
 */
public class BinaryTreeTest {
    
    public BinaryTreeTest() {
    }
    
    @BeforeClass
    public static void setUpClass() {
    }
    
    @AfterClass
    public static void tearDownClass() {
    }
    
    @Before
    public void setUp() {
    }
    
    @After
    public void tearDown() {
    }

    /**
     * Test of insert method, of class BinaryTree.
     */
    @Test
    public void testInsert() {
        System.out.println("insert");
        int val = 0;
        BinaryTree instance = new BinaryTree();
        instance.insert(val);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of printPostOrder method, of class BinaryTree.
     */
    @Test
    public void testPrintPostOrder() {
        System.out.println("printPostOrder");
        BinaryTree instance = new BinaryTree();
        instance.printPostOrder();
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of printInOrder method, of class BinaryTree.
     */
    @Test
    public void testPrintInOrder() {
        System.out.println("printInOrder");
        BinaryTree instance = new BinaryTree();
        instance.printInOrder();
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of printPreOrder method, of class BinaryTree.
     */
    @Test
    public void testPrintPreOrder() {
        System.out.println("printPreOrder");
        BinaryTree instance = new BinaryTree();
        instance.printPreOrder();
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of size method, of class BinaryTree.
     */
    @Test
    public void testSize() {
        System.out.println("size");
        BinaryTree instance = new BinaryTree();
        int expResult = 0;
        int result = instance.size();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of maxDepth method, of class BinaryTree.
     */
    @Test
    public void testMaxDepth() {
        System.out.println("maxDepth");
        BinaryTree instance = new BinaryTree();
        int expResult = 0;
        int result = instance.maxDepth();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of isBST method, of class BinaryTree.
     */
    @Test
    public void testIsBST() {
        System.out.println("isBST");
        BinaryTree instance = new BinaryTree();
        boolean expResult = false;
        boolean result = instance.isBST();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of printValue method, of class BinaryTree.
     */
    @Test
    public void testPrintValue() {
        System.out.println("printValue");
        int a = 0;
        BinaryTree instance = new BinaryTree();
        instance.printValue(a);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of printBranch method, of class BinaryTree.
     */
    @Test
    public void testPrintBranch() {
        System.out.println("printBranch");
        int a = 0;
        int b = 0;
        BinaryTree instance = new BinaryTree();
        instance.printBranch(a, b);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gof_state_soda;

import static org.hamcrest.CoreMatchers.instanceOf;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author lvaro
 */
public class SodaMachineTest {
    
    public SodaMachineTest() {
    }
    
    @BeforeClass
    public static void setUpClass() {
    }
    
    @Before
    public void setUp() {
    }

  SodaState inst1 = new ZeroState();
    SodaState inst2 = new TwentyfiveState();
    SodaState inst3 = new FiftyState();
    SodaMachine instance = new SodaMachine();
    
    /**
     * Test of CoinReturn method, of class SodaMachine.
     */
    @Test
    public void testCoinReturn() {
        System.out.println("CoinReturn-ZeroState");
       // SodaState inst1 = new ZeroState();
       // SodaMachine instance = new SodaMachine();
        instance.SetCurrent(inst1);
        assertEquals("Return $0.00",instance.CoinReturn());
        
        System.out.println("CoinReturn-TwentyfiveState");
        //SodaState inst2 = new TwentyfiveState();
        instance.SetCurrent(inst2);
        assertEquals("$0.25 returned",instance.CoinReturn());

        System.out.println("CoinReturn-FiftyState");
       // SodaState inst3 = new FiftyState();
        instance.SetCurrent(inst3);
        assertEquals("$0.50 returned",instance.CoinReturn());
        //fail("The test case is a prototype.");
    }

    /**
     * Test of CoinSlotDeposit method, of class SodaMachine.
     */
    @Test
    public void testCoinSlotDeposit() {
         System.out.println("CoinSlotDeposit-ZeroState");
        //SodaState inst1 = new ZeroState();
        //SodaMachine instance = new SodaMachine();
        instance.SetCurrent(inst1);
        assertEquals("Total entered: $0.25",instance.CoinSlotDeposit());
        
        System.out.println("CoinSlotDeposit-TwentyfiveState");
        //SodaState inst2 = new TwentyfiveState();
        instance.SetCurrent(inst2);
        assertEquals("Total entered: $0.50",instance.CoinSlotDeposit());

        System.out.println("CoinSlotDeposit-FiftyState");
        //SodaState inst3 = new FiftyState();
        instance.SetCurrent(inst3);
        assertEquals("Coin returned - $0.50 already deposited",instance.CoinSlotDeposit());       
        //fail("The test case is a prototype.");
    }

    /**
     * Test of SodaButton method, of class SodaMachine.
     */
    @Test
    public void testSodaButton() {
       System.out.println("SodaButton-ZeroState");
        instance.SetCurrent(inst1);
        assertEquals("Deposit 50 cents first",instance.SodaButton());  
        System.out.println("SodaButton-TwentyfiveState");
      
        instance.SetCurrent(inst2);
        assertEquals("Enter 35 cents more",instance.SodaButton());
        System.out.println("SodaButton-FiftyState");
        
        instance.SetCurrent(inst3);
        assertEquals("Your soda  been vended",instance.SodaButton());
        //fail("The test case is a prototype.");
          //instance.SetCurrent(null);
       // assertEquals(null,instance.SodaButton());
    }

    /**
     * Test of SetCurrent method, of class SodaMachine.
     */
    @Test
    public void testSetCurrent() {
         System.out.println("SetCurrent to FiftyState");
        //SodaState inst1 = new FiftyState();
        //SodaMachine instance = new SodaMachine();
        instance.SetCurrent(inst3);
        assertThat("Should be Fifty", instance.current, instanceOf(FiftyState.class));
        //fail("The test case is a prototype.");
    }
    
}

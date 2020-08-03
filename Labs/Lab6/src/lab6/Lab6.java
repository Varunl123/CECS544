/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package lab6;

/**
 *
 * @author Daddy
 */
public class Lab6{

    /**
     * @param args the command line arguments
     */
    public static void rec(int i){
         System.out.println(i);if(i>1)
            rec(i-1);
       
    }
    public static void aNewOp(){
        System.out.println("Hello from new op()");
    }
    public static void main(String[] args) {
        BinaryTree bt = new BinaryTree();//(11);
	

	bt.insert( 50);
	bt.insert( 23);
	bt.insert( 71);
	bt.insert( 19);
	bt.insert( 31);
	bt.insert( 55);
	bt.insert( 87);
	bt.insert( 26);
	bt.insert( 37);
	bt.insert( 63);
	bt.insert( 98);
	bt.insert( 25);
	bt.insert( 33);
	bt.insert( 41);
	bt.insert( 92);
	bt.insert( 99);
	

	System.out.println("Tree size is " + bt.size());
	System.out.println ( "Tree depth is " + bt.maxDepth());
	System.out.println ( "Is the tree a BST: " + (bt.isBST() ? "true" : "false"));
	System.out.println ( "In order " ) ;
	bt.printInOrder();
	System.out.println ( "==========================");
	System.out.println ( "Post order ");
	bt.printPostOrder();
	System.out.println ("Pre Order " );
	bt.printPreOrder();
        
        rec(3);
        bt.printValue(51);
        bt.printValue(53);
        bt.printValue(54);
        bt.printValue(57);
        //bt.printValue(58);
        bt.printValue(68);
        bt.printValue(70);
        bt.printValue(79);
        //bt.printValue(81);
        bt.printValue(87);
        bt.printValue(88);
        bt.printValue(97);
        bt.printValue(98);
        bt.printValue(101);
        bt.printValue(106);
        bt.printValue(108);
        bt.printValue(111);
        bt.printValue(112);
        bt.printValue(116);
        bt.printValue(121);
        bt.printValue(122);
        bt.printValue(126);
        bt.printValue(129);
        bt.printValue(130);
        bt.printValue(133);
        
        
        bt.printBranch(53,51);
        bt.printBranch(56,54);
        bt.printBranch(70,68);
        bt.printBranch(80,79);
        bt.printBranch(88,87);
        bt.printBranch(98,97);
        bt.printBranch(101,97);
        bt.printBranch(108,106);
        bt.printBranch(112,111);
        bt.printBranch(116,111);
        bt.printBranch(122,121);
        bt.printBranch(126,121);
        bt.printBranch(130,129);
        bt.printBranch(133,129);
        
       // printBranch()
        
    }
    
}

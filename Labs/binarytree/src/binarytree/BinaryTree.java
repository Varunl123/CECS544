/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package binarytree;
import java.util.*;
public class BinaryTree {
  
    
    
    
   private Node root;
   private Integer lines[]=new Integer[147];
   public BinaryTree(){
      
	root = null;
 
    Arrays.fill(lines,0);
    }
	
    public void insert(int val){
        root=insert(root, val);
    }

    public void printPostOrder(){
            printPostOrder(root);
    }

    public void printInOrder(){
            printInOrder(root);
    }

    public void printPreOrder(){
            printPreOrder(root);
    }

    public int size(){
            return size(root);
    }

    public int maxDepth(){
            return maxDepth(root);
    }

    public boolean isBST(){
            return isBST(root, Integer.MIN_VALUE, Integer.MAX_VALUE);
    }
    private	boolean isBST(Node node, int min, int max){
        lines[51]++;
        if(node == null)
        {    lines[53]++;return true;}
        lines[54]++;
        if(node.data<min || node.data>max) 
        {  lines[56]++; 
        return false;}
      lines[57]++;   return isBST(node.left, min, node.data) &&
                   isBST(node.right, node.data, max);
    }
    private Node NewNode(int val){
        Node root = new Node();
        root.data = val;
        root.left = null;
        root.right = null;
        return root;
	}
    private void printInOrder(Node node){lines[68]++;
        if(node == null) {
         lines[70]++;  return;
        }
        printInOrder(node.left);
        System.out.println(node.data);
        printInOrder(node.right);
	}

    private void printPostOrder(Node node){ 
        lines[79]++;
        if(node == null){
         lines[80]++;   return;
        }
        printInOrder(node.left);
        printInOrder(node.right);
        System.out.println ( node.data );
	}
    private void printPreOrder(Node node) {
       lines[87]++;
        if(node==null){lines[88]++;
           return;
        }
        System.out.println(node.data);
        printPreOrder(node.left);
        printPreOrder(node.right);
}


    private int size(Node node){lines[97]++;
        if(node==null){lines[98]++;
           return 0;
        } 
        else{lines[101]++;
           return (size(node.left) + 1 + size(node.right));
        }
    }

    private Node insert(Node node, int val){lines[106]++;
	if(node==null){
            lines[108]++;
            return NewNode(val);
        }
        lines[111]++;
        if(val <= node.data ){lines[112]++;
           node.left = insert(node.left, val);
        } 
        else{
           lines[116]++;
           node.right = insert(node.right, val);
        }
        
        return node;
	}
    private int maxDepth(Node node){lines[121]++;
        if(node==null){lines[122]++;
            return 0;
        }
        else
        {   lines[126]++;
            int leftDepth = maxDepth(node.left);
            int rightDepth = maxDepth(node.right);
            lines[129]++;
            if(leftDepth>rightDepth){lines[130]++;
                return leftDepth+1;
            }
            else {lines[133]++;
                return rightDepth+1;
            }
        }
    }
    public void printValue(int a){
        System.out.println("Line "+a+" executed "+lines[a]+" times");
    }
    public void printBranch(int a,int b){
        System.out.println("Branch at line "+a+" taken "+(float)lines[a]/lines[b]+" %");
    }
    
}

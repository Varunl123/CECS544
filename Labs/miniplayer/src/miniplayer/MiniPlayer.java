/*
 * REMEMBER TO ADD THE basicplayer.jar FOUND WHERE YOU UNZIPPED THE FILE 
 * [DRIVE:\PATH\BasicPlayer3.0\basicplayer.jar
 * AND ALL OF ITS SUPPORT LIBRARIES THAT ARE FOUND UNDER BasicPlayer3.0\lib 
 *      commons-logging-api.jar
 *      jl1.0.jar
 *      jogg-0.0.7.jar
 *      jorbis-0.0.15.jar
 *      jspeex0.9.7.jar
 *      mp3spi1.9.4.jar
 *      tritonus_share.jar
 *      vorbisspi1.0.2.jar
 */

package miniplayer;

/**
 * @author The mean old bastard
 */
public class MiniPlayer {
    //startup shell for the miniplayer
  
    public static void main(String[] args) {
        MiniPlayerGUI   gui = new MiniPlayerGUI();
        
        gui.go();
    }
    
}

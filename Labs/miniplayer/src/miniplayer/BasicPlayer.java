
package miniplayer;
import java.net.URL;
class BasicPlayer{
    
    int status;
    static final int PLAYING=2;
    static final int OPENED=1;
    static final int UNKNOWN=0;
    static final int STOPPED=3;
    double gain;
    
    BasicPlayer(){
        status=UNKNOWN;
        System.out.println("MBP - Creating BasicPlayer object with status "+status);
    
    }
    public int getStatus(){
       System.out.println("MBP - Getting status - status is "+status);
        return status;
    }
    public void open(URL myURL)throws BasicPlayerException{
        status=OPENED;
        System.out.println("MBP - Opening the URL file:"+myURL);
    }
    public void play() throws BasicPlayerException{
        status=PLAYING;
        System.out.println("MBP - Playing..");
    }
    public void setGain(double value)throws BasicPlayerException{
        this.gain=value;
        System.out.println("MBP - Setting gain to "+value);
        
    }
    public void stop()throws BasicPlayerException{
        status=STOPPED;
        System.out.println("MBP - Stopping play");
         
    }
    public void resume()throws BasicPlayerException{
        status=PLAYING;
        System.out.println("MBP - Resuming playback");
    }
    
}
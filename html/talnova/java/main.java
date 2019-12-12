package process;

import java.awt.List;
import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.Serializable;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Iterator;
import org.json.simple.JSONObject;
import org.json.simple.parser.JSONParser;


public class main {
	public static final int ServerPort = 5001;
    private int num_client = 0;
    private String msg;
    private DataOutputStream dos_arr;
    HashMap<String, ArrayList<DataOutputStream>> map = new HashMap<String, ArrayList<DataOutputStream>>();
    HashMap<String, DataOutputStream> waitmap = new HashMap<String,DataOutputStream>();
    HashMap<String, DataOutputStream> facemap = new HashMap<String,DataOutputStream>();


    public void go() throws IOException {
        ServerSocket ss = null;
        Socket s = null;
        int i;

        try {
            ss = new ServerSocket(ServerPort);
            System.out.println("S: Server Opend");
            while (true) {
                s = ss.accept();
                System.out.println("hi");
                dos_arr = new DataOutputStream(s.getOutputStream());

                ServerThread st = new ServerThread(s, dos_arr);
                st.start();

            }
        } finally {
            if (s != null)
                s.close();
            if (ss != null)
                ss.close();
            System.out.println("Server Closed");
        }
    }

    // room에 있는 dataoutputstream에게 메세지를 보냄
    void send(String msg,String room,String user) {
        int i;
        String[] userlist = user.split("  ");
        System.out.println(user);
        System.out.println(room);
        ArrayList<DataOutputStream> dos_send = map.get(room);

        try {
            for (i = 0 ; i < dos_send.size(); i++) {
            	dos_send.get(i).writeUTF(msg);
            }
            for(int j=0; j<userlist.length; j++) {
            	if(waitmap.get(userlist[j])!=null) {
            		waitmap.get(userlist[j]).writeUTF(msg);

                }


        	}

        } catch (Exception e) {
            e.printStackTrace();
        }
    }



    // Listening thread
    public class ServerThread extends Thread {
        private Socket socket;
        private DataInputStream dis;
        private DataOutputStream id;
        private ObjectInputStream ois;

        ServerThread(Socket s, DataOutputStream i) {
            socket = s;
            id = i;
        }
        public void run() {
            try {
                service();
            } catch (IOException e) {

                System.out.println("나감");

            }
        }

        private void service() throws IOException {
            dis = new DataInputStream(socket.getInputStream());

            String str = null;
            while (true) {
                str = dis.readUTF();
                //String[] str_list = str.split(":::");
                
                System.out.println(str);
                try {
                	JSONParser parser = new JSONParser();
                    Object obj = parser.parse(str);
                    JSONObject jsonObj = (JSONObject) obj;

                    String status = (String) jsonObj.get("status");
                    String room = (String) jsonObj.get("room");
                    String nickname = (String) jsonObj.get("nickname");
                    
                    
                    System.out.println(status);
                    System.out.println(room);
                    System.out.println(nickname);
                }catch (NoClassDefFoundError e) {
                	System.out.println("error");
                	 //The handling for the code
                }
                
//                if(str_list[0].equals("start")) {
//
//                	ArrayList<DataOutputStream> dos_list = new ArrayList<DataOutputStream>();
//
//                	if(map.get(str_list[1])==null) {
//
//                		dos_list.add(id);
//                		map.put(str_list[1],dos_list);
//                		System.out.println(map);
//
//                	}else {
//
//                		ArrayList<DataOutputStream> dos_add = map.get(str_list[1]);
//                		dos_add.add(id);
//                		System.out.println(map);
//
//                	}
//
//                	String msg = String.format(str_list[2] + "님이 입장했습니다.");
//                    //send(msg,str_list[1]);
//                    System.out.println(msg);
//
//                }else if(str_list[0].equals("end")){
//
//                	ArrayList<DataOutputStream> dos_list = new ArrayList<DataOutputStream>();
//                	dos_list = map.get(str_list[1]);
//
//                	if(dos_list.size()==1) {
//
//                		map.remove(str_list[1]);
//                		System.out.println(map);
//
//
//                	}else {
//
//                		dos_list.remove(id);
//                		map.put(str_list[1],dos_list);
//                		System.out.println(map);
//
//                	}
//
//                	System.out.println(str);
//                }else if(str_list[0].equals("startchatlist")) {
//                	waitmap.put(str_list[1],id);
//                	System.out.println(waitmap);
//                }else if(str_list[0].equals("endchatlist")) {
//                	waitmap.remove(str_list[1]);
//                	System.out.println(waitmap);
//                }
//                else {
//
//                    msg = String.format(str_list[1] + ":::" + str_list[2]+":::"+str_list[4]);
//                    send(msg,str_list[0],str_list[3]);
//                    System.out.println(str);
//
//                }
//
           }
        }
    }

    public static void main(String[] args) {
        main s = new main();

        try {
            s.go();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

}

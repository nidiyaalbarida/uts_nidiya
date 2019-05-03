
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.InputStreamReader;
import java.io.DataOutputStream;
import java.io.OutputStreamWriter;
import java.io.UnsupportedEncodingException;
import java.net.HttpURLConnection;
import java.net.URL;
import java.net.URLEncoder;
import java.util.HashMap;
import java.util.Map;

import java.net.HttpURLConnection;

import javax.net.ssl.HttpsURLConnection;

public class RequestHandler {

    public String sendPostRequest (String requestURL, HashMap<String, String> postDataParams){
        URL url;

        StringBuilder sb = new StringBuilder();
        try {
            url = new URL(requestURL);

            HttpURLConnection conn = (HttpsURLConnection) url.openConnection();

            conn.setReadTimeout(15000);
            conn.setConnectTimeout(15000);
            conn.setRequestMethod("POST");
            conn.setDoInput(true);
            conn.setDoOutput(true);
        }
    }
}

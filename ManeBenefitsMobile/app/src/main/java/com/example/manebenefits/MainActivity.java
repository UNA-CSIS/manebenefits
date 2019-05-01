package com.example.manebenefits;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.io.UnsupportedEncodingException;
import java.net.URL;
import java.net.URLConnection;
import java.net.URLEncoder;

import android.content.DialogInterface;
import android.os.Bundle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

public class MainActivity extends AppCompatActivity{

    TextView content;
    EditText phoneedit, nameedit, emailedit;
    String Name, Email, Phone;
    String server_url = "http://10.0.0.191/ManeBenefits/phppost.php";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        content= (TextView)findViewById(R.id.content);
        nameedit= (EditText)findViewById(R.id.nameedit);
        emailedit= (EditText)findViewById(R.id.emailedit);
        phoneedit= (EditText)findViewById(R.id.phoneedit);

        final Button submit_button = findViewById(R.id.submitbutton);
        final TextView skip_button = findViewById(R.id.skipbtn);
        submit_button.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                try{
                    // CALL GetText method to make post method call
                    GetText();
                    startActivity(new Intent(MainActivity.this, Categories.class));
                }
                catch(Exception ex)
                {
                    content.setText(" url exeption! " + ex );
                }
            }
        });
        skip_button.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                try{
                    // CALL GetText method to make post method call
                    startActivity(new Intent(MainActivity.this, Categories.class));
                }
                catch(Exception ex)
                {
                    content.setText(" url exeption! " + ex );
                }
            }
        });

    }

    // Create GetText Method
    public  void  GetText()  throws UnsupportedEncodingException
    {
        // Get user defined values
        Name    = nameedit.getText().toString();
        Email   = emailedit.getText().toString();
        Phone   = phoneedit.getText().toString();

        // Create data variable for sent values to server

        String data = URLEncoder.encode("name", "UTF-8")
                + "=" + URLEncoder.encode(Name, "UTF-8");

        data += "&" + URLEncoder.encode("email", "UTF-8") + "="
                + URLEncoder.encode(Email, "UTF-8");

        data += "&" + URLEncoder.encode("phone", "UTF-8")
                + "=" + URLEncoder.encode(Phone, "UTF-8");

        String text = "";
        BufferedReader reader=null;

        // Send data
        try
        {
            // Defined URL  where to send data
            URL url = new URL("http://10.0.0.191/ManeBenefits/httppost.php");

            // Send POST data request

            URLConnection conn = url.openConnection();
            conn.setDoOutput(true);
            OutputStreamWriter wr = new OutputStreamWriter(conn.getOutputStream());
            wr.write( data );
            wr.flush();

            // Get the server response

            reader = new BufferedReader(new InputStreamReader(conn.getInputStream()));
            StringBuilder sb = new StringBuilder();
            String line = null;

            // Read Server Response
            while((line = reader.readLine()) != null)
            {
                // Append server response in string
                sb.append(line + "\n");
            }
            text = sb.toString();
        }
        catch(Exception ex)
        {
        }
        finally
        {
            try
            {
                reader.close();
            }

            catch(Exception ex) {}
        }
        // Show response on activity
        //content.setText( text  );
    }

}

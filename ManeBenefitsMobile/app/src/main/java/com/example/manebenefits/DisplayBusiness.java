package com.example.manebenefits;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.widget.TextView;

public class DisplayBusiness extends Activity {


    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        Intent intent = getIntent();
        int position = intent.getIntExtra("position", 0);

        // Here we turn your string.xml in an array
        String[] myKeys = getResources().getStringArray(R.array.categories);

        //TextView myTextView = (TextView) findViewById(R.id.my_textview);
        //myTextView.setText(myKeys[position]);
        //checkOption(position);


    }

    public void checkOption(int position){
        switch(position){
            case 0: setContentView(R.layout.display_restaurants);
            break;
            case 1: setContentView(R.layout.display_apparel);
        }

    }
}

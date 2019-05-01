package com.example.manebenefits;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.ListView;

public class ViewCard extends AppCompatActivity {

    ListView menu_lv;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.view_card);

        // Menu
        menu_lv = findViewById(R.id.menu_lv);
        ArrayAdapter<String> myAdapter = new ArrayAdapter<String>(ViewCard.this,
                android.R.layout.simple_list_item_1,
                getResources().getStringArray(R.array.menuItems));
        menu_lv.setAdapter(myAdapter);

        // On click menu list item
        menu_lv.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                switch (position){
                    case 0:
                        startActivity(new Intent(ViewCard.this, MainActivity.class));
                        break;
                    case 1:
                        startActivity(new Intent(ViewCard.this, Categories.class));
                        break;
                    case 3:
                        startActivity(new Intent (ViewCard.this, ViewCard.class));
                }
            }
        });

        // On click menu button
        ImageView menuBtn = findViewById(R.id.menu_Btn);
        menuBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (menu_lv.getAlpha() == 1){
                    menu_lv.setAlpha(0);
                    menu_lv.setEnabled(false);
                    menu_lv.setClickable(false);
                }
                else{
                    menu_lv.setAlpha(1);
                    menu_lv.setClickable(true);
                    menu_lv.setEnabled(true);
                    menu_lv.bringToFront();
                }
            }
        });



    }
}
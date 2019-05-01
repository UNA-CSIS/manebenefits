package com.example.manebenefits;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.TextView;

import java.util.List;

public class Categories extends Activity implements View.OnClickListener {

    private TextView tv1;
    private Button restaurant_btn, apparel_btn, services_btn, activities_btn, healthcare_btn, rentals_btn;
    private ImageView menu_btn;
    public ListView menu_lv;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.categories);

        //tv1 = findViewById(R.id.tv1);
        menu_btn = findViewById(R.id.menu_Btn);
        menu_btn.setOnClickListener(this);
        restaurant_btn = findViewById(R.id.restaurant_btn);
        restaurant_btn.setOnClickListener(this);
        apparel_btn= findViewById(R.id.apparel_btn);
        apparel_btn.setOnClickListener(this);
        services_btn = findViewById(R.id.services_btn);
        services_btn.setOnClickListener(this);
        activities_btn = findViewById(R.id.activities_btn);
        activities_btn.setOnClickListener(this);
        healthcare_btn = findViewById(R.id.healthcare_btn);
        healthcare_btn.setOnClickListener(this);
        rentals_btn = findViewById(R.id.rentals_btn);
        rentals_btn.setOnClickListener(this);
        menu_lv = findViewById(R.id.menu_lv);
        ArrayAdapter<String> myAdapter = new ArrayAdapter<String>(Categories.this,
                android.R.layout.simple_list_item_1,
                getResources().getStringArray(R.array.categoryMenuItems));
        menu_lv.setAdapter(myAdapter);
        menu_lv.bringToFront();
        menu_lv.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                switch (position){
                    case 0:
                        startActivity(new Intent(Categories.this, MainActivity.class));
                        break;
                }
            }
        });

        ImageView menuBtn = findViewById(R.id.menu_Btn);
        menuBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (menu_lv.getAlpha() == 1){
                    menu_lv.setAlpha(0);
                    menu_lv.setEnabled(false);
                }
                else{
                    menu_lv.setAlpha(1);
                    menu_lv.bringToFront();
                    restaurant_btn.invalidate();
                    menu_lv.setEnabled(true);
                }
            }
        });

        //ListView listView = (ListView) findViewById(R.id.category_list);
        //listView.setOnItemClickListener(this);

    }

    @Override
    public void onClick(View v) {
        Intent intent = new Intent();
        if (v.getId()== R.id.menu_Btn){
//            //display menu
//            //check if menu is visible
//            //if not, display. if it is- disappear
//            if(tv1.getText().equals("I MADE IT")){
//                tv1.setText("MAMA");
//            }
//            else{
//                tv1.setText("I MADE IT");
//            }
        }
        else {
            switch (v.getId()) {
                case R.id.restaurant_btn:
                    intent.setClass(this, DisplayRestaurants.class);
                    break;
                case R.id.apparel_btn:
                    intent.setClass(this, DisplayApparel.class);
                    break;
                case R.id.services_btn:
                    intent.setClass(this, DisplayServices.class);
                    break;
                case R.id.activities_btn:
                    intent.setClass(this, DisplayActivities.class);
                    break;
                case R.id.healthcare_btn:
                    intent.setClass(this, DisplayHealthcare.class);
                    break;
                case R.id.rentals_btn:
                    intent.setClass(this, DisplayRentals.class);
                    break;
            }
            //intent.putExtra("position", position);
            // Or / And
            //intent.putExtra("id", id);
            startActivity(intent);
        }
    }
}

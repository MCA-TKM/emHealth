package com.example.mehra.afinal;

import android.content.Context;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

public class Normal extends AppCompatActivity {

    Button submit;
    EditText name;
    EditText email;
    EditText age;
    EditText pass;
    Spinner gender;
    private DBManager db;
    boolean mFlag;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_normal);

        final Context context = getApplicationContext();
        db=new DBManager(context);
        final int mValue = db.numOfRows();
        if (mValue == 0) {
            mFlag = true;
        } else {
            mFlag = false;
        }

        submit=findViewById(R.id.Submit);
        name=findViewById(R.id.nPname);
        email=findViewById(R.id.nemail);
        age=findViewById(R.id.age);
        gender=findViewById(R.id.nspinner);
        pass=findViewById(R.id.npass);

        try {

            submit.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View v) {

                    String name1=name.getText().toString();
                    String email1=email.getText().toString();
                    String age1=age.getText().toString();
                    String gender1=gender.getSelectedItem().toString();
                    String pass1=pass.getText().toString();

                    if(mFlag) {


                        db.insertUserDetails("",name1 , email1,pass1, age1,gender1);
                    }
                    Toast.makeText(context, "Registration successful", Toast.LENGTH_SHORT).show();
                }
            });
        }
        catch (NullPointerException e) {
            Toast.makeText(this, "Null value", Toast.LENGTH_SHORT).show();
        }

    }



}

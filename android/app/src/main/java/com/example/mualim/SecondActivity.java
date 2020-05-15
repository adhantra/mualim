package com.example.mualim;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.Button;

public class SecondActivity extends AppCompatActivity {

    Button btn_start;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_second);

        // move to chat view
        btn_start = findViewById(R.id.btnNext);
        btn_start.setOnClickListener(v -> {
            Intent move = new Intent(SecondActivity.this, ChatActivity.class);
            startActivity(move);
        });
    }
}

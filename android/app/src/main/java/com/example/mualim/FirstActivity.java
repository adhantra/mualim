package com.example.mualim;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.Button;

public class FirstActivity extends AppCompatActivity {

    Button btn_next, btn_skip;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_first);

        // move to second view
        btn_next = findViewById(R.id.btnNext);
        btn_next.setOnClickListener(v -> {
            Intent move = new Intent(FirstActivity.this, SecondActivity.class);
            startActivity(move);
        });

        // skip to chat view
        btn_skip = findViewById(R.id.btnSkip);
        btn_skip.setOnClickListener(v -> {
            Intent skip = new Intent(FirstActivity.this, ChatActivity.class);
            startActivity(skip);
        });
    }
}

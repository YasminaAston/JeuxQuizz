package org.aston.quizzapp.ui;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;

import androidx.appcompat.app.AppCompatActivity;
import androidx.navigation.NavController;
import androidx.navigation.fragment.NavHostFragment;
import androidx.navigation.ui.NavigationUI;

import com.google.android.material.bottomnavigation.BottomNavigationView;

import org.aston.quizzapp.R;
import org.aston.quizzapp.ui.fragments.MainActivity3;

import dagger.hilt.android.AndroidEntryPoint;

@AndroidEntryPoint
public class MainActivity extends AppCompatActivity {

    private Button button;
    private ImageButton music;
    private ImageButton film;
    private ImageButton sport;
    private ImageButton geo;
    private ImageButton art;
    private ImageButton science;

    //private final UserService userService;

    //@Inject
    // public MainActivity(UserService userService){
     //    this.userService = userService;
     //}

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        this.button = findViewById(R.id.button);
        this.art = findViewById(R.id.imageView12);
        this.science = findViewById(R.id.imageView10);
        this.music = findViewById(R.id.imageView8);
        this.film = findViewById(R.id.imageView7);
        this.sport = findViewById(R.id.imageView9);
        this.geo = findViewById(R.id.imageView11);

        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent fragment_game = new Intent(getApplicationContext(), MainActivity3.class);
                startActivity(fragment_game);
                finish();
            }
        });



      NavHostFragment navHostFragment =
              (NavHostFragment) getSupportFragmentManager().findFragmentById(R.id.fragment);
        NavController navController = navHostFragment.getNavController();
     BottomNavigationView bottomNavigationView = findViewById(R.id.bottomnavigation);
        NavigationUI.setupWithNavController(bottomNavigationView, navController);
        //NavigationUI.setupActionBarWithNavController(this, navController);






    }

}
package org.aston.quizzapp.ui;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import androidx.appcompat.app.AppCompatActivity;
import androidx.navigation.NavController;
import androidx.navigation.fragment.NavHostFragment;
import androidx.navigation.ui.NavigationUI;

import com.google.android.material.bottomnavigation.BottomNavigationView;

import org.aston.quizzapp.R;
import org.aston.quizzapp.ui.fragments.gameFragment;
import org.aston.quizzapp.ui.fragments.userFragment;

import dagger.hilt.android.AndroidEntryPoint;

@AndroidEntryPoint
public class MainActivity extends AppCompatActivity {

    private Button button;

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


        NavHostFragment navHostFragment =
                (NavHostFragment) getSupportFragmentManager().findFragmentById(R.id.fragment);
        NavController navController = navHostFragment.getNavController();
        BottomNavigationView bottomNavigationView = findViewById(R.id.bottomnavigation);
        NavigationUI.setupWithNavController(bottomNavigationView, navController);
        //NavigationUI.setupActionBarWithNavController(this, navController);






    }

}
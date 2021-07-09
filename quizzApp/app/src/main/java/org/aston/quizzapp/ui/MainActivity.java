package org.aston.quizzapp.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.navigation.NavController;
import androidx.navigation.fragment.NavHostFragment;
import androidx.navigation.ui.NavigationUI;

import android.os.Bundle;

import com.google.android.material.bottomnavigation.BottomNavigationView;

import org.aston.quizzapp.R;

import dagger.hilt.android.AndroidEntryPoint;

import static androidx.navigation.Navigation.findNavController;

@AndroidEntryPoint
public class MainActivity extends AppCompatActivity {

    //private final UserService userService;

    //@Inject
    // public MainActivity(UserService userService){
     //    this.userService = userService;
     //}

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        NavHostFragment navHostFragment =
                (NavHostFragment) getSupportFragmentManager().findFragmentById(R.id.fragment);
        NavController navController = navHostFragment.getNavController();
        BottomNavigationView bottomNavigationView = findViewById(R.id.bottomnavigation);
        NavigationUI.setupWithNavController(bottomNavigationView, navController);
        //NavigationUI.setupActionBarWithNavController(this, navController);

    }


}
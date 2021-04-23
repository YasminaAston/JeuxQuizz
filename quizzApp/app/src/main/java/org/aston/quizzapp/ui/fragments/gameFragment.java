package org.aston.quizzapp.ui.fragments;

import android.app.Activity;
import android.os.Bundle;

import androidx.annotation.IdRes;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.databinding.DataBindingComponent;
import androidx.databinding.DataBindingUtil;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.LifecycleOwner;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModel;
import androidx.lifecycle.ViewModelProvider;
import androidx.lifecycle.ViewModelStoreOwner;
import androidx.navigation.NavController;
import androidx.navigation.Navigation;
import androidx.navigation.fragment.NavHostFragment;
import androidx.navigation.ui.NavigationUI;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.material.bottomnavigation.BottomNavigationView;

import org.aston.quizzapp.models.Category;
import org.aston.quizzapp.models.Quizz;
import org.aston.quizzapp.viewmodel.CategoryViewModel;
import org.aston.quizzapp.viewmodel.GameViewModel;
import org.aston.quizzapp.R;
import org.aston.quizzapp.databinding.FragmentGameBinding;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.viewmodel.QuizzViewModel;

import java.util.List;
import java.util.Objects;

import javax.xml.transform.stream.StreamSource;

import dagger.hilt.android.AndroidEntryPoint;

import static org.aston.quizzapp.R.layout.fragment_game;

/**
 * A simple {@link Fragment} subclass.
 * create an instance of this fragment.
 */
@AndroidEntryPoint
public class gameFragment extends Fragment {

    // /////////////////////////////////////
    private FragmentGameBinding _biniding;
    private final FragmentGameBinding getBinding() {
        return this._biniding;
    }
    ////////////////////////////////////
    // FragmentGameBinding gameBinding;
    private Button btn;
    private TextView textView;
    private GameViewModel gameViewModel;
    private CategoryViewModel categoryViewModel;
    private QuizzViewModel quizzViewModel;
    private FragmentGameBinding upBinding;


    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);


    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        this._biniding = FragmentGameBinding.inflate(inflater, container, false);
        FragmentGameBinding gameBinding = this.getBinding();
        System.out.println("gameBinding not null ");
        System.out.println(gameBinding);

        View view = gameBinding.getRoot();

        gameViewModel = (GameViewModel) new ViewModelProvider(this).get(GameViewModel.class);
        categoryViewModel = (CategoryViewModel) new ViewModelProvider(this).get(CategoryViewModel.class);
        quizzViewModel = (QuizzViewModel) new ViewModelProvider(this).get(QuizzViewModel.class);

        if (gameBinding != null) {
            gameBinding.setLifecycleOwner((LifecycleOwner)this);
            gameBinding.setGameViewModel(gameViewModel);
        }
        gameViewModel.getGame(1);
        System.out.println("gameViewModel.gameMutableLiveData.getValue() : ");
        System.out.println(gameViewModel.gameMutableLiveData.getValue());
        gameViewModel.gameMutableLiveData.observe(getViewLifecycleOwner(), new Observer<Game>() {
            @Override
            public void onChanged(Game game) {
                // textView.setText("Get game");
                // gameViewModel.gameMutableLiveData.setValue(game);
                //textView.setText(game.getId());
                System.out.println(game);
                String st = "Email: " + game.getUser().getEmail();
                // textView.setText(st);
                //gameBinding.gameTextView.setText(st);

            }
        });
        categoryViewModel.categoriesMutableLiveData.observe(getViewLifecycleOwner(), new Observer<List<Category>>() {
            @Override
            public void onChanged(List<Category> categories) {
                System.out.println("categories:  ");
                System.out.println(categories);
            }
        });

        return view;
    }

    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);
        btn=(Button)view.findViewById(R.id.btnJouer);
        textView = view.findViewById(R.id.gameTextView);
        //textView.setText("My Game");

        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //startGame();
                gameViewModel.getGame(1);
                categoryViewModel.getCategories();

            }
        });
    }

    private void startGame(){
        //textView.setText("ssssssssssss");
        QuizzDto quizzDto = new QuizzDto();
        quizzDto.setDifficulty(1);
        quizzDto.setCategoryId(1);
        quizzDto.setUserId(1);
        gameViewModel.startGame(quizzDto);
        gameViewModel.gameMutableLiveData.observe(getViewLifecycleOwner(), (Observer) o -> {
            System.out.println("game changed ! ");
            System.out.println(gameViewModel.gameMutableLiveData.getValue());
        });
    }

}
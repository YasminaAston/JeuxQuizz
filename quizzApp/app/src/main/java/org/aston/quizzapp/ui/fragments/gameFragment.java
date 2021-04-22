package org.aston.quizzapp.ui.fragments;

import android.app.Activity;
import android.os.Bundle;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.databinding.DataBindingComponent;
import androidx.databinding.DataBindingUtil;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;
import org.aston.quizzapp.viewmodel.CategoryViewModel;
import org.aston.quizzapp.viewmodel.GameViewModel;
import org.aston.quizzapp.R;
import org.aston.quizzapp.databinding.FragmentGameBinding;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.viewmodel.QuizzViewModel;

import java.util.Objects;

import dagger.hilt.android.AndroidEntryPoint;

/**
 * A simple {@link Fragment} subclass.
 * create an instance of this fragment.
 */
@AndroidEntryPoint
public class gameFragment extends Fragment {


    FragmentGameBinding gameBinding;
    private Button btn;
    private TextView textView;
    private GameViewModel gameViewModel;
    private CategoryViewModel categoryViewModel;
    private QuizzViewModel quizzViewModel;



    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        gameViewModel = new ViewModelProvider(requireActivity()).get(GameViewModel.class);
        categoryViewModel = new ViewModelProvider(requireActivity()).get(CategoryViewModel.class);
        quizzViewModel = new ViewModelProvider(requireActivity()).get(QuizzViewModel.class);

        gameViewModel.gameMutableLiveData.observe(this, new Observer<Game>() {
            @Override
            public void onChanged(Game game) {
               // textView.setText("Get game");
               // gameViewModel.gameMutableLiveData.setValue(game);
                //textView.setText(game.getId());
                System.out.println(game);
                String st = game.toString();
                textView.setText(st);
               // gameBinding.gameTextView.setText(st);

            }
        });

    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        gameBinding = DataBindingUtil.inflate(inflater, R.layout.fragment_game, container, false);
        return inflater.inflate(R.layout.fragment_game, container, false);
    }

    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);
        btn=(Button)view.findViewById(R.id.btnJouer);
        textView = view.findViewById(R.id.gameTextView);
        textView.setText("My Game");

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
        gameViewModel.gameMutableLiveData.observe(getViewLifecycleOwner(), new Observer() {
            @Override
            public void onChanged(Object o) {
                System.out.println("game changed ! ");
                System.out.println(gameViewModel.gameMutableLiveData.getValue());
            }
        });
    }
}
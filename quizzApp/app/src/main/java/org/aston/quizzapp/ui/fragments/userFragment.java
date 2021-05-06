package org.aston.quizzapp.ui.fragments;

import android.os.Bundle;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.LifecycleOwner;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;
import androidx.lifecycle.ViewModelStoreOwner;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;

import org.aston.quizzapp.R;
import org.aston.quizzapp.databinding.FragmentGameBinding;
import org.aston.quizzapp.databinding.FragmentUserBinding;
import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.models.User;
import org.aston.quizzapp.viewmodel.CategoryViewModel;
import org.aston.quizzapp.viewmodel.GameViewModel;
import org.aston.quizzapp.viewmodel.QuizzViewModel;
import org.aston.quizzapp.viewmodel.UserViewModel;

import dagger.hilt.android.AndroidEntryPoint;

/**
 * A simple {@link Fragment} subclass.
 * create an instance of this fragment.
 */

//@AndroidEntryPoint
public class userFragment extends Fragment {

    // /////////////////////////////////////
    private FragmentUserBinding _biniding;
    private final FragmentUserBinding getBinding() {
        return this._biniding;
    }

    private UserViewModel userViewModel;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        this._biniding = FragmentUserBinding.inflate(inflater, container, false);
        FragmentUserBinding userBinding = this.getBinding();
        System.out.println("userBinding ");
        System.out.println(userBinding);

        View view = userBinding.getRoot();
        userViewModel = (UserViewModel) new ViewModelProvider(requireActivity()).get(UserViewModel.class);

        if (userBinding != null) {
            userBinding.setLifecycleOwner((LifecycleOwner)this);
            userBinding.setUserViewModel(userViewModel);
        }
        userViewModel.getUserInfos(1);

        userViewModel.userMutableLiveData.observe(getViewLifecycleOwner(), new Observer<User>() {
            @Override
            public void onChanged(User user) {
                System.out.println(user);
                String st = "Email: " + user.getEmail();
            }
        });
        return view;
    }



    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);
    }
}
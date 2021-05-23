package org.aston.quizzapp.ui.fragments;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.LifecycleOwner;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;

import org.aston.quizzapp.databinding.FragmentUserBinding;
import org.aston.quizzapp.models.User;
import org.aston.quizzapp.viewmodel.UserViewModel;

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
        userViewModel.getUserInfos(5);

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
package org.aston.quizzapp.ui.fragments;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import androidx.fragment.app.Fragment;
import androidx.lifecycle.ViewModelProvider;

import org.aston.quizzapp.R;
import org.aston.quizzapp.viewmodel.CategoryViewModel;

/**
 * A simple {@link Fragment} subclass.
 * create an instance of this fragment.
 */

//@AndroidEntryPoint
public class homeFragment extends Fragment {


    CategoryViewModel categoryViewModel;




    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        categoryViewModel = (CategoryViewModel) new ViewModelProvider(requireActivity()).get(CategoryViewModel.class);
        categoryViewModel.getCategories();
        return inflater.inflate(R.layout.fragment_home, container, false);
    }
}

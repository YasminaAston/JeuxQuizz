package org.aston.quizzapp.databinding;
import org.aston.quizzapp.R;
import org.aston.quizzapp.BR;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import android.view.View;
@SuppressWarnings("unchecked")
@javax.annotation.Generated("Android Data Binding")
public class FragmentGameBindingImpl extends FragmentGameBinding  {

    @Nullable
    private static final androidx.databinding.ViewDataBinding.IncludedLayouts sIncludes;
    @Nullable
    private static final android.util.SparseIntArray sViewsWithIds;
    static {
        sIncludes = null;
        sViewsWithIds = new android.util.SparseIntArray();
        sViewsWithIds.put(R.id.btnJouer, 2);
    }
    // views
    // variables
    // values
    // listeners
    // Inverse Binding Event Handlers

    public FragmentGameBindingImpl(@Nullable androidx.databinding.DataBindingComponent bindingComponent, @NonNull View root) {
        this(bindingComponent, root, mapBindings(bindingComponent, root, 3, sIncludes, sViewsWithIds));
    }
    private FragmentGameBindingImpl(androidx.databinding.DataBindingComponent bindingComponent, View root, Object[] bindings) {
        super(bindingComponent, root, 1
            , (android.widget.Button) bindings[2]
            , (androidx.constraintlayout.widget.ConstraintLayout) bindings[0]
            , (android.widget.TextView) bindings[1]
            );
        this.gameFragment.setTag(null);
        this.gameTextView.setTag(null);
        setRootTag(root);
        // listeners
        invalidateAll();
    }

    @Override
    public void invalidateAll() {
        synchronized(this) {
                mDirtyFlags = 0x4L;
        }
        requestRebind();
    }

    @Override
    public boolean hasPendingBindings() {
        synchronized(this) {
            if (mDirtyFlags != 0) {
                return true;
            }
        }
        return false;
    }

    @Override
    public boolean setVariable(int variableId, @Nullable Object variable)  {
        boolean variableSet = true;
        if (BR.gameViewModel == variableId) {
            setGameViewModel((org.aston.quizzapp.viewmodel.GameViewModel) variable);
        }
        else {
            variableSet = false;
        }
            return variableSet;
    }

    public void setGameViewModel(@Nullable org.aston.quizzapp.viewmodel.GameViewModel GameViewModel) {
        this.mGameViewModel = GameViewModel;
        synchronized(this) {
            mDirtyFlags |= 0x2L;
        }
        notifyPropertyChanged(BR.gameViewModel);
        super.requestRebind();
    }

    @Override
    protected boolean onFieldChange(int localFieldId, Object object, int fieldId) {
        switch (localFieldId) {
            case 0 :
                return onChangeGameViewModelGameMutableLiveData((androidx.lifecycle.MutableLiveData<org.aston.quizzapp.models.Game>) object, fieldId);
        }
        return false;
    }
    private boolean onChangeGameViewModelGameMutableLiveData(androidx.lifecycle.MutableLiveData<org.aston.quizzapp.models.Game> GameViewModelGameMutableLiveData, int fieldId) {
        if (fieldId == BR._all) {
            synchronized(this) {
                    mDirtyFlags |= 0x1L;
            }
            return true;
        }
        return false;
    }

    @Override
    protected void executeBindings() {
        long dirtyFlags = 0;
        synchronized(this) {
            dirtyFlags = mDirtyFlags;
            mDirtyFlags = 0;
        }
        java.lang.String gameViewModelGameMutableLiveDataGetUserGetEmail = null;
        org.aston.quizzapp.viewmodel.GameViewModel gameViewModel = mGameViewModel;
        org.aston.quizzapp.models.Game gameViewModelGameMutableLiveDataGetValue = null;
        androidx.lifecycle.MutableLiveData<org.aston.quizzapp.models.Game> gameViewModelGameMutableLiveData = null;
        org.aston.quizzapp.models.User gameViewModelGameMutableLiveDataGetUser = null;

        if ((dirtyFlags & 0x7L) != 0) {



                if (gameViewModel != null) {
                    // read gameViewModel.gameMutableLiveData
                    gameViewModelGameMutableLiveData = gameViewModel.gameMutableLiveData;
                }
                updateLiveDataRegistration(0, gameViewModelGameMutableLiveData);


                if (gameViewModelGameMutableLiveData != null) {
                    // read gameViewModel.gameMutableLiveData.getValue()
                    gameViewModelGameMutableLiveDataGetValue = gameViewModelGameMutableLiveData.getValue();
                }


                if (gameViewModelGameMutableLiveDataGetValue != null) {
                    // read gameViewModel.gameMutableLiveData.getValue().getUser()
                    gameViewModelGameMutableLiveDataGetUser = gameViewModelGameMutableLiveDataGetValue.getUser();
                }


                if (gameViewModelGameMutableLiveDataGetUser != null) {
                    // read gameViewModel.gameMutableLiveData.getValue().getUser().getEmail()
                    gameViewModelGameMutableLiveDataGetUserGetEmail = gameViewModelGameMutableLiveDataGetUser.getEmail();
                }
        }
        // batch finished
        if ((dirtyFlags & 0x7L) != 0) {
            // api target 1

            androidx.databinding.adapters.TextViewBindingAdapter.setText(this.gameTextView, gameViewModelGameMutableLiveDataGetUserGetEmail);
        }
    }
    // Listener Stub Implementations
    // callback impls
    // dirty flag
    private  long mDirtyFlags = 0xffffffffffffffffL;
    /* flag mapping
        flag 0 (0x1L): gameViewModel.gameMutableLiveData
        flag 1 (0x2L): gameViewModel
        flag 2 (0x3L): null
    flag mapping end*/
    //end
}
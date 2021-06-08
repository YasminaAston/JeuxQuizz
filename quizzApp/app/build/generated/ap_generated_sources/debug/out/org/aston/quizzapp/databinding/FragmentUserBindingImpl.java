package org.aston.quizzapp.databinding;
import org.aston.quizzapp.R;
import org.aston.quizzapp.BR;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import android.view.View;
@SuppressWarnings("unchecked")
@javax.annotation.Generated("Android Data Binding")
public class FragmentUserBindingImpl extends FragmentUserBinding  {

    @Nullable
    private static final androidx.databinding.ViewDataBinding.IncludedLayouts sIncludes;
    @Nullable
    private static final android.util.SparseIntArray sViewsWithIds;
    static {
        sIncludes = null;
        sViewsWithIds = new android.util.SparseIntArray();
        sViewsWithIds.put(R.id.profile, 3);
        sViewsWithIds.put(R.id.imageView2, 4);
        sViewsWithIds.put(R.id.imageView3, 5);
        sViewsWithIds.put(R.id.divider, 6);
        sViewsWithIds.put(R.id.divider2, 7);
        sViewsWithIds.put(R.id.imageView4, 8);
        sViewsWithIds.put(R.id.textView7, 9);
        sViewsWithIds.put(R.id.button2, 10);
        sViewsWithIds.put(R.id.imageView5, 11);
        sViewsWithIds.put(R.id.textView8, 12);
    }
    // views
    @NonNull
    private final androidx.constraintlayout.widget.ConstraintLayout mboundView0;
    // variables
    // values
    // listeners
    // Inverse Binding Event Handlers

    public FragmentUserBindingImpl(@Nullable androidx.databinding.DataBindingComponent bindingComponent, @NonNull View root) {
        this(bindingComponent, root, mapBindings(bindingComponent, root, 13, sIncludes, sViewsWithIds));
    }
    private FragmentUserBindingImpl(androidx.databinding.DataBindingComponent bindingComponent, View root, Object[] bindings) {
        super(bindingComponent, root, 1
            , (android.widget.Button) bindings[10]
            , (android.view.View) bindings[6]
            , (android.view.View) bindings[7]
            , (android.widget.ImageView) bindings[4]
            , (android.widget.ImageView) bindings[5]
            , (android.widget.ImageView) bindings[8]
            , (android.widget.ImageView) bindings[11]
            , (android.widget.TextView) bindings[3]
            , (android.widget.TextView) bindings[1]
            , (android.widget.TextView) bindings[2]
            , (android.widget.TextView) bindings[9]
            , (android.widget.TextView) bindings[12]
            );
        this.mboundView0 = (androidx.constraintlayout.widget.ConstraintLayout) bindings[0];
        this.mboundView0.setTag(null);
        this.textView4.setTag(null);
        this.textView6.setTag(null);
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
        if (BR.userViewModel == variableId) {
            setUserViewModel((org.aston.quizzapp.viewmodel.UserViewModel) variable);
        }
        else {
            variableSet = false;
        }
            return variableSet;
    }

    public void setUserViewModel(@Nullable org.aston.quizzapp.viewmodel.UserViewModel UserViewModel) {
        this.mUserViewModel = UserViewModel;
        synchronized(this) {
            mDirtyFlags |= 0x2L;
        }
        notifyPropertyChanged(BR.userViewModel);
        super.requestRebind();
    }

    @Override
    protected boolean onFieldChange(int localFieldId, Object object, int fieldId) {
        switch (localFieldId) {
            case 0 :
                return onChangeUserViewModelUserMutableLiveData((androidx.lifecycle.MutableLiveData<org.aston.quizzapp.models.User>) object, fieldId);
        }
        return false;
    }
    private boolean onChangeUserViewModelUserMutableLiveData(androidx.lifecycle.MutableLiveData<org.aston.quizzapp.models.User> UserViewModelUserMutableLiveData, int fieldId) {
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
        org.aston.quizzapp.viewmodel.UserViewModel userViewModel = mUserViewModel;
        java.lang.String userViewModelUserMutableLiveDataGetUsername = null;
        java.lang.String userViewModelUserMutableLiveDataGetEmail = null;
        androidx.lifecycle.MutableLiveData<org.aston.quizzapp.models.User> userViewModelUserMutableLiveData = null;
        org.aston.quizzapp.models.User userViewModelUserMutableLiveDataGetValue = null;

        if ((dirtyFlags & 0x7L) != 0) {



                if (userViewModel != null) {
                    // read userViewModel.userMutableLiveData
                    userViewModelUserMutableLiveData = userViewModel.userMutableLiveData;
                }
                updateLiveDataRegistration(0, userViewModelUserMutableLiveData);


                if (userViewModelUserMutableLiveData != null) {
                    // read userViewModel.userMutableLiveData.getValue()
                    userViewModelUserMutableLiveDataGetValue = userViewModelUserMutableLiveData.getValue();
                }


                if (userViewModelUserMutableLiveDataGetValue != null) {
                    // read userViewModel.userMutableLiveData.getValue().getUsername()
                    userViewModelUserMutableLiveDataGetUsername = userViewModelUserMutableLiveDataGetValue.getUsername();
                    // read userViewModel.userMutableLiveData.getValue().getEmail()
                    userViewModelUserMutableLiveDataGetEmail = userViewModelUserMutableLiveDataGetValue.getEmail();
                }
        }
        // batch finished
        if ((dirtyFlags & 0x7L) != 0) {
            // api target 1

            androidx.databinding.adapters.TextViewBindingAdapter.setText(this.textView4, userViewModelUserMutableLiveDataGetUsername);
            androidx.databinding.adapters.TextViewBindingAdapter.setText(this.textView6, userViewModelUserMutableLiveDataGetEmail);
        }
    }
    // Listener Stub Implementations
    // callback impls
    // dirty flag
    private  long mDirtyFlags = 0xffffffffffffffffL;
    /* flag mapping
        flag 0 (0x1L): userViewModel.userMutableLiveData
        flag 1 (0x2L): userViewModel
        flag 2 (0x3L): null
    flag mapping end*/
    //end
}
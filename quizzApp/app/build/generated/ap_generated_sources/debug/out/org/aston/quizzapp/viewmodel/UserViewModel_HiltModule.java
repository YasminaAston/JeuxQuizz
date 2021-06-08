package org.aston.quizzapp.viewmodel;

import androidx.hilt.lifecycle.ViewModelAssistedFactory;
import androidx.lifecycle.ViewModel;
import dagger.Binds;
import dagger.Module;
import dagger.hilt.InstallIn;
import dagger.hilt.android.components.ActivityRetainedComponent;
import dagger.hilt.codegen.OriginatingElement;
import dagger.multibindings.IntoMap;
import dagger.multibindings.StringKey;
import javax.annotation.Generated;

@Generated("androidx.hilt.AndroidXHiltProcessor")
@Module
@InstallIn(ActivityRetainedComponent.class)
@OriginatingElement(
    topLevelClass = UserViewModel.class
)
public interface UserViewModel_HiltModule {
  @Binds
  @IntoMap
  @StringKey("org.aston.quizzapp.viewmodel.UserViewModel")
  ViewModelAssistedFactory<? extends ViewModel> bind(UserViewModel_AssistedFactory factory);
}

package org.aston.quizzapp;

import android.app.Activity;
import android.app.Application;
import android.app.Service;
import android.view.View;
import androidx.fragment.app.Fragment;
import androidx.hilt.lifecycle.ViewModelAssistedFactory;
import androidx.hilt.lifecycle.ViewModelFactoryModules_ActivityModule_ProvideFactoryFactory;
import androidx.hilt.lifecycle.ViewModelFactoryModules_FragmentModule_ProvideFactoryFactory;
import androidx.lifecycle.ViewModel;
import androidx.lifecycle.ViewModelProvider;
import dagger.hilt.android.internal.builders.ActivityComponentBuilder;
import dagger.hilt.android.internal.builders.ActivityRetainedComponentBuilder;
import dagger.hilt.android.internal.builders.FragmentComponentBuilder;
import dagger.hilt.android.internal.builders.ServiceComponentBuilder;
import dagger.hilt.android.internal.builders.ViewComponentBuilder;
import dagger.hilt.android.internal.builders.ViewWithFragmentComponentBuilder;
import dagger.hilt.android.internal.modules.ApplicationContextModule;
import dagger.hilt.android.internal.modules.ApplicationContextModule_ProvideApplicationFactory;
import dagger.internal.DoubleCheck;
import dagger.internal.MapBuilder;
import dagger.internal.MemoizedSentinel;
import dagger.internal.Preconditions;
import java.util.Collections;
import java.util.Map;
import java.util.Set;
import javax.annotation.Generated;
import javax.inject.Provider;
import okhttp3.OkHttpClient;
import org.aston.quizzapp.data.CategoryRemoteDataSource;
import org.aston.quizzapp.data.CategoryRepository;
import org.aston.quizzapp.data.GameRemoteDataSource;
import org.aston.quizzapp.data.GameRepository;
import org.aston.quizzapp.data.QuizzRemoteDataSource;
import org.aston.quizzapp.data.QuizzRepository;
import org.aston.quizzapp.data.UserRemoteDataSource;
import org.aston.quizzapp.data.UserRepository;
import org.aston.quizzapp.data.network.CategoryApi;
import org.aston.quizzapp.data.network.GameApi;
import org.aston.quizzapp.data.network.QuizzApi;
import org.aston.quizzapp.data.network.UserApi;
import org.aston.quizzapp.di.NetworkModule;
import org.aston.quizzapp.di.NetworkModule_ProvideCategoryApiFactory;
import org.aston.quizzapp.di.NetworkModule_ProvideConverterFactoryFactory;
import org.aston.quizzapp.di.NetworkModule_ProvideGameApiFactory;
import org.aston.quizzapp.di.NetworkModule_ProvideHttpClientFactory;
import org.aston.quizzapp.di.NetworkModule_ProvideQuizzApiFactory;
import org.aston.quizzapp.di.NetworkModule_ProvideRetrofitInstanceFactory;
import org.aston.quizzapp.di.NetworkModule_ProvideUserApiFactory;
import org.aston.quizzapp.ui.MainActivity;
import org.aston.quizzapp.ui.fragments.gameFragment;
import org.aston.quizzapp.ui.fragments.homeFragment;
import org.aston.quizzapp.ui.fragments.settingsFragment;
import org.aston.quizzapp.viewmodel.CategoryViewModel_AssistedFactory;
import org.aston.quizzapp.viewmodel.CategoryViewModel_AssistedFactory_Factory;
import org.aston.quizzapp.viewmodel.GameViewModel_AssistedFactory;
import org.aston.quizzapp.viewmodel.GameViewModel_AssistedFactory_Factory;
import org.aston.quizzapp.viewmodel.QuizzViewModel_AssistedFactory;
import org.aston.quizzapp.viewmodel.QuizzViewModel_AssistedFactory_Factory;
import org.aston.quizzapp.viewmodel.UserViewModel_AssistedFactory;
import org.aston.quizzapp.viewmodel.UserViewModel_AssistedFactory_Factory;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class DaggerQuizzApplication_HiltComponents_ApplicationC extends QuizzApplication_HiltComponents.ApplicationC {
  private final ApplicationContextModule applicationContextModule;

  private volatile Provider<Application> provideApplicationProvider;

  private volatile Object okHttpClient = new MemoizedSentinel();

  private volatile Object gsonConverterFactory = new MemoizedSentinel();

  private volatile Object retrofit = new MemoizedSentinel();

  private volatile Object categoryApi = new MemoizedSentinel();

  private volatile Object gameApi = new MemoizedSentinel();

  private volatile Object quizzApi = new MemoizedSentinel();

  private volatile Object userApi = new MemoizedSentinel();

  private DaggerQuizzApplication_HiltComponents_ApplicationC(
      ApplicationContextModule applicationContextModuleParam) {
    this.applicationContextModule = applicationContextModuleParam;
  }

  public static Builder builder() {
    return new Builder();
  }

  private Provider<Application> getApplicationProvider() {
    Object local = provideApplicationProvider;
    if (local == null) {
      local = new SwitchingProvider<>(0);
      provideApplicationProvider = (Provider<Application>) local;
    }
    return (Provider<Application>) local;
  }

  private OkHttpClient getOkHttpClient() {
    Object local = okHttpClient;
    if (local instanceof MemoizedSentinel) {
      synchronized (local) {
        local = okHttpClient;
        if (local instanceof MemoizedSentinel) {
          local = NetworkModule_ProvideHttpClientFactory.provideHttpClient();
          okHttpClient = DoubleCheck.reentrantCheck(okHttpClient, local);
        }
      }
    }
    return (OkHttpClient) local;
  }

  private GsonConverterFactory getGsonConverterFactory() {
    Object local = gsonConverterFactory;
    if (local instanceof MemoizedSentinel) {
      synchronized (local) {
        local = gsonConverterFactory;
        if (local instanceof MemoizedSentinel) {
          local = NetworkModule_ProvideConverterFactoryFactory.provideConverterFactory();
          gsonConverterFactory = DoubleCheck.reentrantCheck(gsonConverterFactory, local);
        }
      }
    }
    return (GsonConverterFactory) local;
  }

  private Retrofit getRetrofit() {
    Object local = retrofit;
    if (local instanceof MemoizedSentinel) {
      synchronized (local) {
        local = retrofit;
        if (local instanceof MemoizedSentinel) {
          local = NetworkModule_ProvideRetrofitInstanceFactory.provideRetrofitInstance(getOkHttpClient(), getGsonConverterFactory());
          retrofit = DoubleCheck.reentrantCheck(retrofit, local);
        }
      }
    }
    return (Retrofit) local;
  }

  private CategoryApi getCategoryApi() {
    Object local = categoryApi;
    if (local instanceof MemoizedSentinel) {
      synchronized (local) {
        local = categoryApi;
        if (local instanceof MemoizedSentinel) {
          local = NetworkModule_ProvideCategoryApiFactory.provideCategoryApi(getRetrofit());
          categoryApi = DoubleCheck.reentrantCheck(categoryApi, local);
        }
      }
    }
    return (CategoryApi) local;
  }

  private GameApi getGameApi() {
    Object local = gameApi;
    if (local instanceof MemoizedSentinel) {
      synchronized (local) {
        local = gameApi;
        if (local instanceof MemoizedSentinel) {
          local = NetworkModule_ProvideGameApiFactory.provideGameApi(getRetrofit());
          gameApi = DoubleCheck.reentrantCheck(gameApi, local);
        }
      }
    }
    return (GameApi) local;
  }

  private QuizzApi getQuizzApi() {
    Object local = quizzApi;
    if (local instanceof MemoizedSentinel) {
      synchronized (local) {
        local = quizzApi;
        if (local instanceof MemoizedSentinel) {
          local = NetworkModule_ProvideQuizzApiFactory.provideQuizzApi(getRetrofit());
          quizzApi = DoubleCheck.reentrantCheck(quizzApi, local);
        }
      }
    }
    return (QuizzApi) local;
  }

  private UserApi getUserApi() {
    Object local = userApi;
    if (local instanceof MemoizedSentinel) {
      synchronized (local) {
        local = userApi;
        if (local instanceof MemoizedSentinel) {
          local = NetworkModule_ProvideUserApiFactory.provideUserApi(getRetrofit());
          userApi = DoubleCheck.reentrantCheck(userApi, local);
        }
      }
    }
    return (UserApi) local;
  }

  @Override
  public ActivityRetainedComponentBuilder retainedComponentBuilder() {
    return new ActivityRetainedCBuilder();
  }

  @Override
  public ServiceComponentBuilder serviceComponentBuilder() {
    return new ServiceCBuilder();
  }

  @Override
  public void injectQuizzApplication(QuizzApplication quizzApplication) {
  }

  public static final class Builder {
    private ApplicationContextModule applicationContextModule;

    private Builder() {
    }

    public Builder applicationContextModule(ApplicationContextModule applicationContextModule) {
      this.applicationContextModule = Preconditions.checkNotNull(applicationContextModule);
      return this;
    }

    /**
     * @deprecated This module is declared, but an instance is not used in the component. This method is a no-op. For more, see https://dagger.dev/unused-modules.
     */
    @Deprecated
    public Builder networkModule(NetworkModule networkModule) {
      Preconditions.checkNotNull(networkModule);
      return this;
    }

    public QuizzApplication_HiltComponents.ApplicationC build() {
      Preconditions.checkBuilderRequirement(applicationContextModule, ApplicationContextModule.class);
      return new DaggerQuizzApplication_HiltComponents_ApplicationC(applicationContextModule);
    }
  }

  private final class ActivityRetainedCBuilder implements QuizzApplication_HiltComponents.ActivityRetainedC.Builder {
    @Override
    public QuizzApplication_HiltComponents.ActivityRetainedC build() {
      return new ActivityRetainedCImpl();
    }
  }

  private final class ActivityRetainedCImpl extends QuizzApplication_HiltComponents.ActivityRetainedC {
    private ActivityRetainedCImpl() {

    }

    @Override
    public ActivityComponentBuilder activityComponentBuilder() {
      return new ActivityCBuilder();
    }

    private final class ActivityCBuilder implements QuizzApplication_HiltComponents.ActivityC.Builder {
      private Activity activity;

      @Override
      public ActivityCBuilder activity(Activity activity) {
        this.activity = Preconditions.checkNotNull(activity);
        return this;
      }

      @Override
      public QuizzApplication_HiltComponents.ActivityC build() {
        Preconditions.checkBuilderRequirement(activity, Activity.class);
        return new ActivityCImpl(activity);
      }
    }

    private final class ActivityCImpl extends QuizzApplication_HiltComponents.ActivityC {
      private final Activity activity;

      private volatile Provider<CategoryRepository> categoryRepositoryProvider;

      private volatile Provider<CategoryViewModel_AssistedFactory> categoryViewModel_AssistedFactoryProvider;

      private volatile Provider<GameRepository> gameRepositoryProvider;

      private volatile Provider<GameViewModel_AssistedFactory> gameViewModel_AssistedFactoryProvider;

      private volatile Provider<QuizzRepository> quizzRepositoryProvider;

      private volatile Provider<QuizzViewModel_AssistedFactory> quizzViewModel_AssistedFactoryProvider;

      private volatile Provider<UserRepository> userRepositoryProvider;

      private volatile Provider<UserViewModel_AssistedFactory> userViewModel_AssistedFactoryProvider;

      private ActivityCImpl(Activity activityParam) {
        this.activity = activityParam;
      }

      private CategoryRemoteDataSource getCategoryRemoteDataSource() {
        return new CategoryRemoteDataSource(DaggerQuizzApplication_HiltComponents_ApplicationC.this.getCategoryApi());
      }

      private CategoryRepository getCategoryRepository() {
        return new CategoryRepository(getCategoryRemoteDataSource());
      }

      private Provider<CategoryRepository> getCategoryRepositoryProvider() {
        Object local = categoryRepositoryProvider;
        if (local == null) {
          local = new SwitchingProvider<>(1);
          categoryRepositoryProvider = (Provider<CategoryRepository>) local;
        }
        return (Provider<CategoryRepository>) local;
      }

      private CategoryViewModel_AssistedFactory getCategoryViewModel_AssistedFactory() {
        return CategoryViewModel_AssistedFactory_Factory.newInstance(DaggerQuizzApplication_HiltComponents_ApplicationC.this.getApplicationProvider(), getCategoryRepositoryProvider());
      }

      private Provider<CategoryViewModel_AssistedFactory> getCategoryViewModel_AssistedFactoryProvider(
          ) {
        Object local = categoryViewModel_AssistedFactoryProvider;
        if (local == null) {
          local = new SwitchingProvider<>(0);
          categoryViewModel_AssistedFactoryProvider = (Provider<CategoryViewModel_AssistedFactory>) local;
        }
        return (Provider<CategoryViewModel_AssistedFactory>) local;
      }

      private GameRemoteDataSource getGameRemoteDataSource() {
        return new GameRemoteDataSource(DaggerQuizzApplication_HiltComponents_ApplicationC.this.getGameApi());
      }

      private GameRepository getGameRepository() {
        return new GameRepository(getGameRemoteDataSource());
      }

      private Provider<GameRepository> getGameRepositoryProvider() {
        Object local = gameRepositoryProvider;
        if (local == null) {
          local = new SwitchingProvider<>(3);
          gameRepositoryProvider = (Provider<GameRepository>) local;
        }
        return (Provider<GameRepository>) local;
      }

      private GameViewModel_AssistedFactory getGameViewModel_AssistedFactory() {
        return GameViewModel_AssistedFactory_Factory.newInstance(DaggerQuizzApplication_HiltComponents_ApplicationC.this.getApplicationProvider(), getGameRepositoryProvider());
      }

      private Provider<GameViewModel_AssistedFactory> getGameViewModel_AssistedFactoryProvider() {
        Object local = gameViewModel_AssistedFactoryProvider;
        if (local == null) {
          local = new SwitchingProvider<>(2);
          gameViewModel_AssistedFactoryProvider = (Provider<GameViewModel_AssistedFactory>) local;
        }
        return (Provider<GameViewModel_AssistedFactory>) local;
      }

      private QuizzRemoteDataSource getQuizzRemoteDataSource() {
        return new QuizzRemoteDataSource(DaggerQuizzApplication_HiltComponents_ApplicationC.this.getQuizzApi());
      }

      private QuizzRepository getQuizzRepository() {
        return new QuizzRepository(getQuizzRemoteDataSource());
      }

      private Provider<QuizzRepository> getQuizzRepositoryProvider() {
        Object local = quizzRepositoryProvider;
        if (local == null) {
          local = new SwitchingProvider<>(5);
          quizzRepositoryProvider = (Provider<QuizzRepository>) local;
        }
        return (Provider<QuizzRepository>) local;
      }

      private QuizzViewModel_AssistedFactory getQuizzViewModel_AssistedFactory() {
        return QuizzViewModel_AssistedFactory_Factory.newInstance(DaggerQuizzApplication_HiltComponents_ApplicationC.this.getApplicationProvider(), getQuizzRepositoryProvider());
      }

      private Provider<QuizzViewModel_AssistedFactory> getQuizzViewModel_AssistedFactoryProvider() {
        Object local = quizzViewModel_AssistedFactoryProvider;
        if (local == null) {
          local = new SwitchingProvider<>(4);
          quizzViewModel_AssistedFactoryProvider = (Provider<QuizzViewModel_AssistedFactory>) local;
        }
        return (Provider<QuizzViewModel_AssistedFactory>) local;
      }

      private UserRemoteDataSource getUserRemoteDataSource() {
        return new UserRemoteDataSource(DaggerQuizzApplication_HiltComponents_ApplicationC.this.getUserApi());
      }

      private UserRepository getUserRepository() {
        return new UserRepository(getUserRemoteDataSource());
      }

      private Provider<UserRepository> getUserRepositoryProvider() {
        Object local = userRepositoryProvider;
        if (local == null) {
          local = new SwitchingProvider<>(7);
          userRepositoryProvider = (Provider<UserRepository>) local;
        }
        return (Provider<UserRepository>) local;
      }

      private UserViewModel_AssistedFactory getUserViewModel_AssistedFactory() {
        return UserViewModel_AssistedFactory_Factory.newInstance(DaggerQuizzApplication_HiltComponents_ApplicationC.this.getApplicationProvider(), getUserRepositoryProvider());
      }

      private Provider<UserViewModel_AssistedFactory> getUserViewModel_AssistedFactoryProvider() {
        Object local = userViewModel_AssistedFactoryProvider;
        if (local == null) {
          local = new SwitchingProvider<>(6);
          userViewModel_AssistedFactoryProvider = (Provider<UserViewModel_AssistedFactory>) local;
        }
        return (Provider<UserViewModel_AssistedFactory>) local;
      }

      private Map<String, Provider<ViewModelAssistedFactory<? extends ViewModel>>> getMapOfStringAndProviderOfViewModelAssistedFactoryOf(
          ) {
        return MapBuilder.<String, Provider<ViewModelAssistedFactory<? extends ViewModel>>>newMapBuilder(4).put("org.aston.quizzapp.viewmodel.CategoryViewModel", (Provider) getCategoryViewModel_AssistedFactoryProvider()).put("org.aston.quizzapp.viewmodel.GameViewModel", (Provider) getGameViewModel_AssistedFactoryProvider()).put("org.aston.quizzapp.viewmodel.QuizzViewModel", (Provider) getQuizzViewModel_AssistedFactoryProvider()).put("org.aston.quizzapp.viewmodel.UserViewModel", (Provider) getUserViewModel_AssistedFactoryProvider()).build();
      }

      private ViewModelProvider.Factory getProvideFactory() {
        return ViewModelFactoryModules_ActivityModule_ProvideFactoryFactory.provideFactory(activity, ApplicationContextModule_ProvideApplicationFactory.provideApplication(DaggerQuizzApplication_HiltComponents_ApplicationC.this.applicationContextModule), getMapOfStringAndProviderOfViewModelAssistedFactoryOf());
      }

      @Override
      public Set<ViewModelProvider.Factory> getActivityViewModelFactory() {
        return Collections.<ViewModelProvider.Factory>singleton(getProvideFactory());
      }

      @Override
      public FragmentComponentBuilder fragmentComponentBuilder() {
        return new FragmentCBuilder();
      }

      @Override
      public ViewComponentBuilder viewComponentBuilder() {
        return new ViewCBuilder();
      }

      @Override
      public void injectMainActivity(MainActivity mainActivity) {
      }

      private final class FragmentCBuilder implements QuizzApplication_HiltComponents.FragmentC.Builder {
        private Fragment fragment;

        @Override
        public FragmentCBuilder fragment(Fragment fragment) {
          this.fragment = Preconditions.checkNotNull(fragment);
          return this;
        }

        @Override
        public QuizzApplication_HiltComponents.FragmentC build() {
          Preconditions.checkBuilderRequirement(fragment, Fragment.class);
          return new FragmentCImpl(fragment);
        }
      }

      private final class FragmentCImpl extends QuizzApplication_HiltComponents.FragmentC {
        private final Fragment fragment;

        private FragmentCImpl(Fragment fragmentParam) {
          this.fragment = fragmentParam;
        }

        private ViewModelProvider.Factory getProvideFactory() {
          return ViewModelFactoryModules_FragmentModule_ProvideFactoryFactory.provideFactory(fragment, ApplicationContextModule_ProvideApplicationFactory.provideApplication(DaggerQuizzApplication_HiltComponents_ApplicationC.this.applicationContextModule), ActivityCImpl.this.getMapOfStringAndProviderOfViewModelAssistedFactoryOf());
        }

        @Override
        public Set<ViewModelProvider.Factory> getFragmentViewModelFactory() {
          return Collections.<ViewModelProvider.Factory>singleton(getProvideFactory());
        }

        @Override
        public ViewWithFragmentComponentBuilder viewWithFragmentComponentBuilder() {
          return new ViewWithFragmentCBuilder();
        }

        @Override
        public void injectgameFragment(gameFragment gameFragment) {
        }

        @Override
        public void injecthomeFragment(homeFragment homeFragment) {
        }

        @Override
        public void injectsettingsFragment(settingsFragment settingsFragment) {
        }

        private final class ViewWithFragmentCBuilder implements QuizzApplication_HiltComponents.ViewWithFragmentC.Builder {
          private View view;

          @Override
          public ViewWithFragmentCBuilder view(View view) {
            this.view = Preconditions.checkNotNull(view);
            return this;
          }

          @Override
          public QuizzApplication_HiltComponents.ViewWithFragmentC build() {
            Preconditions.checkBuilderRequirement(view, View.class);
            return new ViewWithFragmentCImpl(view);
          }
        }

        private final class ViewWithFragmentCImpl extends QuizzApplication_HiltComponents.ViewWithFragmentC {
          private ViewWithFragmentCImpl(View view) {

          }
        }
      }

      private final class ViewCBuilder implements QuizzApplication_HiltComponents.ViewC.Builder {
        private View view;

        @Override
        public ViewCBuilder view(View view) {
          this.view = Preconditions.checkNotNull(view);
          return this;
        }

        @Override
        public QuizzApplication_HiltComponents.ViewC build() {
          Preconditions.checkBuilderRequirement(view, View.class);
          return new ViewCImpl(view);
        }
      }

      private final class ViewCImpl extends QuizzApplication_HiltComponents.ViewC {
        private ViewCImpl(View view) {

        }
      }

      private final class SwitchingProvider<T> implements Provider<T> {
        private final int id;

        SwitchingProvider(int id) {
          this.id = id;
        }

        @SuppressWarnings("unchecked")
        @Override
        public T get() {
          switch (id) {
            case 0: // org.aston.quizzapp.viewmodel.CategoryViewModel_AssistedFactory 
            return (T) ActivityCImpl.this.getCategoryViewModel_AssistedFactory();

            case 1: // org.aston.quizzapp.data.CategoryRepository 
            return (T) ActivityCImpl.this.getCategoryRepository();

            case 2: // org.aston.quizzapp.viewmodel.GameViewModel_AssistedFactory 
            return (T) ActivityCImpl.this.getGameViewModel_AssistedFactory();

            case 3: // org.aston.quizzapp.data.GameRepository 
            return (T) ActivityCImpl.this.getGameRepository();

            case 4: // org.aston.quizzapp.viewmodel.QuizzViewModel_AssistedFactory 
            return (T) ActivityCImpl.this.getQuizzViewModel_AssistedFactory();

            case 5: // org.aston.quizzapp.data.QuizzRepository 
            return (T) ActivityCImpl.this.getQuizzRepository();

            case 6: // org.aston.quizzapp.viewmodel.UserViewModel_AssistedFactory 
            return (T) ActivityCImpl.this.getUserViewModel_AssistedFactory();

            case 7: // org.aston.quizzapp.data.UserRepository 
            return (T) ActivityCImpl.this.getUserRepository();

            default: throw new AssertionError(id);
          }
        }
      }
    }
  }

  private final class ServiceCBuilder implements QuizzApplication_HiltComponents.ServiceC.Builder {
    private Service service;

    @Override
    public ServiceCBuilder service(Service service) {
      this.service = Preconditions.checkNotNull(service);
      return this;
    }

    @Override
    public QuizzApplication_HiltComponents.ServiceC build() {
      Preconditions.checkBuilderRequirement(service, Service.class);
      return new ServiceCImpl(service);
    }
  }

  private final class ServiceCImpl extends QuizzApplication_HiltComponents.ServiceC {
    private ServiceCImpl(Service service) {

    }
  }

  private final class SwitchingProvider<T> implements Provider<T> {
    private final int id;

    SwitchingProvider(int id) {
      this.id = id;
    }

    @SuppressWarnings("unchecked")
    @Override
    public T get() {
      switch (id) {
        case 0: // android.app.Application 
        return (T) ApplicationContextModule_ProvideApplicationFactory.provideApplication(DaggerQuizzApplication_HiltComponents_ApplicationC.this.applicationContextModule);

        default: throw new AssertionError(id);
      }
    }
  }
}

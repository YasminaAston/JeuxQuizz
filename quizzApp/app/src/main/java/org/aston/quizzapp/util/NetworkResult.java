package org.aston.quizzapp.util;

public class NetworkResult<T> {

    public T data = null;
    public String message = null;

    public NetworkResult() {
    }

    public NetworkResult(T data) {
        this.data = data;
    }

    public NetworkResult(String message) {
        this.message = message;
    }
    public NetworkResult(T data, String message) {
        this.data = data;
        this.message = message;
    }

    public static class Success<T> extends NetworkResult<T>{
         public T data;

        public Success(T data) {
            super(data);
        }
    }

     public static class Error<T> extends NetworkResult<T>{
         public String message = null;

         public Error(String message) {
             super(message);
         }
     }
     public static class Loading<T> extends NetworkResult<T>{
         public Loading() {
         }
     }


}

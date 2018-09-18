package com.example.mehra.afinal;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.DatabaseUtils;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

public class DBManager  extends SQLiteOpenHelper {

    public static final String DATABASE_NAME = "HEALTH.db";
    public static final String TABLE_REG = "use_reg";
    public static final String ID = "id";
    public static final String NAME = "name";
    public static final String EMAIL = "email";
    public static final String PASS = "passwrd";
    public static final String AGE = "age";
    public static final String GENDER = "gender";


    public DBManager(Context context) {
        super(context, DATABASE_NAME, null, 1);
    }


    public DBManager(Context context, String name, SQLiteDatabase.CursorFactory factory, int version) {
        super(context, name, factory, version);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {

        db.execSQL("create table " + TABLE_REG + "(" + ID + " integer primary key,"
                + NAME + " text,"
                + EMAIL + " text,"
                + PASS+ " text,"
                + AGE + " text,"
                + GENDER + " text)"
        );
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {

    }


    public int numOfRows() {
        SQLiteDatabase sqLiteDatabase = this.getReadableDatabase();
        int numOfRows = (int) DatabaseUtils.queryNumEntries(sqLiteDatabase, TABLE_REG);
        return numOfRows;
    }


    public boolean insertUserDetails(String id, String name, String email, String pass,String age,
                                     String gender) {
        SQLiteDatabase db = this.getWritableDatabase();


        ContentValues contentValues = new ContentValues();
        contentValues.put(ID, id);
        contentValues.put(NAME, name);
        contentValues.put(EMAIL, email);
        contentValues.put(PASS,pass);
        contentValues.put(AGE, age);
        contentValues.put(GENDER, gender);

        db.insert(TABLE_REG, null, contentValues);
        return  true;
    }

    public void deleteRow(String number)
    {
        SQLiteDatabase db = this.getWritableDatabase();
        db.execSQL("delete from " + TABLE_REG+ " WHERE "+ID+"='"+number+"'");
        db.close();
    }


    public Cursor getData(String mail) {
     SQLiteDatabase db = this.getReadableDatabase();
        Cursor res = db.rawQuery("select " + PASS +" from " + TABLE_REG +"WHERE"+EMAIL+"='"+mail+"'", null);
        return res;
    }

}







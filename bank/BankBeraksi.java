package com.bank.bank;
public class BankBeraksi {
    int saldo=100000;
    void simpanuang(int uang){
        saldo += uang;
    }
    void ambiluang(int uang){
        saldo -=uang;
    }
    public int getsaldo(){
        return saldo;
    }
}

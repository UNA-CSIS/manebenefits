package com.example.manebenefits;

public class SelectedBusiness {
    private String name, address, category, discount, facebook, instagram, website;

    SelectedBusiness(String name, String address, String category, String discount, String facebook, String instagram, String website){
        this.name = name;
        this.address = address;
        this.category = category;
        this.discount = discount;
        this.facebook = facebook;
        this.instagram = instagram;
        this.website = website;
    }


    public String getName(){
        return name;
    }
    public String getAddress(){
        return address;
    }
    public String getCategory(){
        return category;
    }
    public String getDiscount(){
        return discount;
    }
    public String getFacebook(){
        return facebook;
    }
    public String getInstagram(){
        return instagram;
    }
    public String getWebsite(){
        return website;
    }

}

class empex {
    public int empid;
    public String empname;

    empex() {
        empid = 0;
        empname = null;
    }

    empex(int id, String name) {
        empid = id;
        empname = name;
    }

    public void show() {
        System.out.println("empid: " + empid);
        System.out.println("empname: " + empname);
    }
}

public class tryemp {
    public static void main(String args[]) {
        empex obj = new empex(1, "Johnny");
        obj.show();
    }
}

class empd {

    private int empId;
    private String empName;

    public void test() {
        empId = 1;
        empName = "John";
    }

    public void show() {
        System.out.println("empId: " + empId);
        System.out.println("empName: " + empName);
    }
}

public class emp {
    public static void main(String args[]) {
        empd obj = new empd();
        obj.test();
        obj.show();
    }
}
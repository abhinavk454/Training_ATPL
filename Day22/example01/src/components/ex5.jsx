import { useState } from "react";
import "../styles/ex5.css";

const example5 = () => {
  const list = [
    "Banana",
    "Apple",
    "Orange",
    "Mango",
    "Pineapple",
    "Watermelon",
  ];

  const [filterList, setFilterList] = useState(list);

  const handleSearch = (e) => {
    if (e.target.value === "") {
      setFilterList(list);
      return;
    }
    const filteredValues = list.filter(
      (item) => item.toLowerCase().indexOf(e.target.value.toLowerCase()) !== -1
    );
    setFilterList(filteredValues);
  };
  return (
    <div className="ex5">
      <div>
        Search: <input name="query" type="text" onChange={handleSearch} />
      </div>
      {filterList &&
        filterList.map((item, index) => <div key={index}>{item}</div>)}
    </div>
  );
};

export default example5;
